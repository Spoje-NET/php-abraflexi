<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Description of Functions.
 *
 * @author vitex
 *
 * @no-named-arguments
 */
class Functions
{
    /**
     * Where to get JSON files with evidence structure etc.
     */
    public static string $infoDir = __DIR__.'/../../static';

    /**
     * convert unicode to entities for use with AbraFlexi queries.
     *
     * @return string
     */
    public static function urlEncode(string $urlRaw)
    {
        return str_replace(['%27', '%3A'], ["'", ':'], rawurlencode($urlRaw));
    }

    /**
     * Gives you AbraFlexi class name for Given Evidence.
     *
     * @param string $evidence
     *
     * @return string Class name
     */
    public static function evidenceToClassName($evidence): string
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }

    /**
     * Returns code:CODE.
     *
     * @deprecated since version 3.6 Use the Code::ensure() instead
     */
    public static function code(string $code): string
    {
        return (substr($code, 0, 4) === 'ext:') ? $code : 'code:'.strtoupper(self::uncode($code));
    }

    /**
     * Convert companyUrl provided by CustomButton to options array.
     *
     * @return array Options
     */
    public static function companyUrlToOptions(string $companyUrl): array
    {
        $urlParts = parse_url($companyUrl);
        $scheme = isset($urlParts['scheme']) ? $urlParts['scheme'].'://' : '';
        $host = $urlParts['host'] ?? '';
        $port = isset($urlParts['port']) ? ':'.$urlParts['port'] : '';
        $path = $urlParts['path'] ?? '';

        if (\array_key_exists('user', $urlParts)) {
            $options['user'] = $urlParts['user'];
        }

        if (\array_key_exists('pass', $urlParts)) {
            $options['password'] = $urlParts['pass'];
        }

        $options['company'] = basename($path);
        $options['url'] = $scheme.$host.$port;

        return $options;
    }

    /**
     * Returns CODE without code: prefix.
     *
     * @deprecated since version 3.6 Use the Code::strip() instead
     */
    public static function uncode(string $code): string
    {
        return str_replace(['code:', 'code%3A'], '', $code);
    }

    /**
     * Prepare "IN" subselect.
     *
     * @return string "in" fragment
     */
    public static function flexiIN(array $items, string $key)
    {
        $slashed = array_map(
            static function ($a, $column) {
                return $column === 'stitky' ? "'".self::code($a)."'" : "'{$a}'";
            },
            $items,
            array_fill(0, \count($items), $key),
        );

        return $key.' in ('.implode(',', $slashed).')';
    }

    /**
     * Generuje fragment url pro filtrování.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/filters
     *
     * @param array  $data   key=>values; value can bee class DatePeriod, DateTime or Array
     * @param string $joiner default and/or
     * @param string $defop  default operator
     */
    public static function flexiUrl(array $data, $joiner = 'and', $defop = 'eq'): string
    {
        $parts = [];

        foreach ($data as $column => $value) {
            if (!is_numeric($column)) {
                if (\is_int($data[$column]) || \is_float($data[$column])) {
                    $parts[$column] = $column.' eq \''.$data[$column].'\'';
                } elseif (\is_bool($data[$column])) {
                    $parts[$column] = $data[$column] ? $column.' eq true' : $column.' eq false';
                } elseif (null === $data[$column]) {
                    $parts[$column] = $column.' is null';
                } elseif (\is_array($data[$column])) {
                    $parts[$column] = self::flexiIN($value, $column);
                } elseif (\is_object($data[$column])) {
                    switch (\get_class($data[$column])) {
                        case 'DatePeriod':
                            $parts[$column] = $column." between '".$data[$column]->getStartDate()->format(Date::$format)."' '".$data[$column]->getEndDate()->format(Date::$format)."'";

                            break;
                        case 'DateTime':
                            $parts[$column] = $column." eq '".$data[$column]->format(Date::$format)."'";

                            break;

                        default:
                            $parts[$column] = $column." {$defop} '".$data[$column]."'";

                            break;
                    }
                } else {
                    switch ($value) {
                        case '!null':
                            $parts[$column] = $column.' is not null';

                            break;
                        case 'is empty':
                        case 'is not empty':
                        case 'is true':
                        case 'is false':
                            $parts[$column] = $column.' '.$value;

                            break;

                        default:
                            $condParts = explode(' ', trim($value));

                            switch ($condParts[0]) {
                                case '<>':
                                case '!=':
                                case 'ne':
                                case 'neq':
                                case '<':
                                case 'lt':
                                case '<=':
                                case 'lte':
                                case '>':
                                case 'gt':
                                case '>=':
                                case 'gte':
                                case 'like':
                                case 'begins':
                                case 'between':
                                case 'ends':
                                    if (\count($condParts) === 1) {
                                        $parts[$column] = $column .= ' '.$value;
                                    } else {
                                        $parts[$column] = $column .= ' '.$condParts[0]." '".$condParts[1]."'";
                                    }

                                    break;

                                default:
                                    switch ($column) {
                                        case 'stitky':
                                            $parts[$column] = $column."='".self::code($data[$column])."'";

                                            break;

                                        default:
                                            $parts[$column] = $column." {$defop} '".$data[$column]."'";

                                            break;
                                    }

                                    break;
                            }

                            break;
                    }
                }
            } else {
                $parts[] = $value;
            }
        }

        return implode(' '.$joiner.' ', $parts);
    }

    /**
     * PHP Date object to AbraFlexi date format.
     *
     * @deprecated Use Date::dateToFlexiDate() instead
     */
    public static function dateToFlexiDate(\DateTime $date)
    {
        return $date->format(Date::$format);
    }

    /**
     * PHP Date object to AbraFlexi date format.
     *
     * @abstracted Use DateTime::dateToFlexiDateTime() instead
     */
    public static function dateToFlexiDateTime(\DateTime $dateTime)
    {
        return $dateTime->format(DateTime::$format);
    }

    /**
     * AbraFlexi date to PHP DateTime conversion.
     *
     * @deprecated Use Date::flexiDateToDateTime() instead
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00
     *
     * @return \DateTime|false
     */
    public static function flexiDateToDateTime(string $flexidate)
    {
        if (strstr($flexidate, '+')) {
            $format = Date::$format.'O';
        } elseif (strstr($flexidate, 'Z')) {
            $format = Date::$format.'Z';
        } else {
            $format = Date::$format;
        }

        return \DateTime::createFromFormat($format, $flexidate)->setTime(0, 0);
    }

    /**
     * AbraFlexi dateTime to PHP DateTime conversion.
     *
     * @deprecated Use DateTime::flexiDateTimeToDateTime() instead
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime|false
     */
    public static function flexiDateTimeToDateTime(string $flexidatetime)
    {
        if (strstr($flexidatetime, '.')) { // NewFormat
            $format = DateTime::$format;
        } else { // Old format
            $format = 'Y-m-d\TH:i:s+P';
        }

        return \DateTime::createFromFormat($format, $flexidatetime);
    }

    /**
     * Převede rekurzivně Objekt na pole.
     *
     * @param array|object $object
     *
     * @return array
     */
    public static function object2array($object)
    {
        $result = null;

        if (\is_object($object)) {
            $objectData = get_object_vars($object);

            if (\is_array($objectData) && \count($objectData)) {
                $result = array_map('self::object2array', $objectData);
            }
        } else {
            if (\is_array($object)) {
                foreach ($object as $item => $value) {
                    $result[$item] = self::object2array($value);
                }
            } else {
                $result = $object;
            }
        }

        return $result;
    }

    /**
     * Převede rekurzivně v poli všechny objekty na jejich identifikátory.
     *
     * @param array|object $object
     *
     * @return array
     */
    public static function objectToID($object)
    {
        $resultID = null;

        if (\is_object($object) && method_exists($object, '__toString')) {
            $resultID = $object->__toString();
        } else {
            if (\is_array($object)) {
                foreach ($object as $item => $value) {
                    $resultID[$item] = self::objectToID($value);
                }
            } else { // String
                $resultID = $object;
            }
        }

        return $resultID;
    }

    /**
     * Prepare record ID to use in URL.
     *
     * @param mixed $id
     *
     * @return string id ready for use in URL
     */
    public static function urlizeId($id)
    {
        if (\is_array($id)) {
            $id = rawurlencode('('.self::flexiUrl($id).')');
        } elseif (is_numeric($id)) {
            $id = (string) $id;
        } elseif (preg_match('/^ext:/', (string) $id)) {
            $id = self::urlEncode((string) $id);
        } elseif (preg_match('/^code:/', (string) $id)) {
            $id = self::code(self::urlEncode(self::uncode((string) $id)));
        }

        return $id;
    }

    /**
     * Convert XML to array.
     *
     * @param string $xml
     *
     * @return array
     */
    public static function xml2array($xml)
    {
        $arr = [];

        if (!empty($xml)) {
            if (\is_string($xml)) {
                $xml = simplexml_load_string($xml);
            }

            foreach ($xml->attributes() as $a) {
                $arr['@'.$a->getName()] = (string) $a;
            }

            foreach ($xml->children() as $r) {
                if (\count($r->children()) === 0) {
                    $arr[$r->getName()] = (string) $r;
                } else {
                    $arr[$r->getName()][] = self::xml2array($r);
                }
            }
        }

        return $arr;
    }

    /**
     * Obtain structure for current (or given) evidence.
     *
     * @return array Evidence structure
     */
    public static function getOfflineColumnsInfo(string $evidence): ?array
    {
        $columnsInfo = null;
        $infoSource = self::$infoDir.'/Properties.'.$evidence.'.json';

        if (file_exists($infoSource)) {
            $columnsInfo = json_decode(file_get_contents($infoSource), true);
        }

        if (property_exists('\\AbraFlexi\\Relations', $evidence)) {
            foreach (Relations::${$evidence} as $url => $properties) {
                $properties['type'] = 'relations';
                $columnsInfo[$url] = $properties;
            }
        }

        return $columnsInfo;
    }
}
