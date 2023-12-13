<?php

declare(strict_types=1);

/**
 * Several Static Functions
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2023 Vitex Software
 */

namespace AbraFlexi;

/**
 * Description of Functions
 *
 * @author vitex
 */
class Functions
{
    /**
     * Formating string for \DateTime::format() for datetime columns
     *
     * @deprecated since version 2.17
     *
     * @var string
     */
    public static $DateTimeFormat = 'Y-m-d\TH:i:s.u+P';

    /**
     * Formating string for \DateTime::format() for date columns
     *
     * @deprecated since version 2.17
     *
     * @var string
     */
    public static $DateFormat = 'Y-m-d';

    /**
     * convert unicode to entities for use with AbraFlexi queries
     *
     * @param string $urlRaw
     *
     * @return string
     */
    public static function urlEncode(string $urlRaw)
    {
        return str_replace(['%27', '%3A'], ["'", ':'], rawurlencode($urlRaw));
    }

    /**
     * Gives you AbraFlexi class name for Given Evidence
     *
     * @param string $evidence
     *
     * @return string Class name
     */
    public static function evidenceToClassName($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }

    /**
     * Returns code:CODE
     *
     * @param string $code
     *
     * @return string
     */
    public static function code(string $code)
    {
        return ((substr($code, 0, 4) == 'ext:') ? $code : 'code:' . strtoupper(self::uncode($code)));
    }


    /**
     * Convert companyUrl provided by CustomButton to options array
     *
     * @param string $companyUrl
     *
     * @return array Options
     */
    public static function companyUrlToOptions(string $companyUrl)
    {
        $urlParts = parse_url($companyUrl);
        $scheme = isset($urlParts['scheme']) ? $urlParts['scheme'] . '://' : '';
        $host = isset($urlParts['host']) ? $urlParts['host'] : '';
        $port = isset($urlParts['port']) ? ':' . $urlParts['port'] : '';
        $path = isset($urlParts['path']) ? $urlParts['path'] : '';
        if (array_key_exists('user', $urlParts)) {
            $options['user'] = $urlParts['user'];
        }
        if (array_key_exists('pass', $urlParts)) {
            $options['password'] = $urlParts['pass'];
        }
        $options['company'] = basename($path);
        $options['url'] = $scheme . $host . $port;
        return $options;
    }

    /**
     * Returns CODE without code: prefix
     *
     * @param string $code
     *
     * @return string
     */
    public static function uncode(string $code)
    {
        return str_replace(['code:', 'code%3A'], '', $code);
    }

    /**
     * Prepare "IN" subselect
     *
     * @param array $items
     * @param string $key
     *
     * @return string "in" fragment
     */
    public static function flexiIN(array $items, string $key)
    {
        $slashed = array_map(function ($a, $column) {
            return $column === 'stitky' ? "'" . self::code($a) . "'" : "'$a'";
        }, $items,
                array_fill(0, count($items), $key));
        return $key . " in (" . implode(',', $slashed) . ")";
    }

    /**
     * Generuje fragment url pro filtrování.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/filters
     *
     * @param array  $data   key=>values; value can bee class DatePeriod, DateTime or Array
     * @param string $joiner default and/or
     * @param string $defop  default operator
     *
     * @return string
     */
    public static function flexiUrl(array $data, $joiner = 'and', $defop = 'eq')
    {
        $parts = [];
        foreach ($data as $column => $value) {
            if (!is_numeric($column)) {
                if (is_integer($data[$column]) || is_float($data[$column])) {
                    $parts[$column] = $column . ' eq \'' . $data[$column] . '\'';
                } elseif (is_bool($data[$column])) {
                    $parts[$column] = $data[$column] ? $column . ' eq true' : $column . ' eq false';
                } elseif (is_null($data[$column])) {
                    $parts[$column] = $column . " is null";
                } elseif (is_array($data[$column])) {
                    $parts[$column] = self::flexiIN($value, $column);
                } elseif (is_object($data[$column])) {
                    switch (get_class($data[$column])) {
                        case 'DatePeriod':
                            $parts[$column] = $column . " between '" . $data[$column]->getStartDate()->format(self::$DateFormat) . "' '" . $data[$column]->getEndDate()->format(self::$DateFormat) . "'";
                            break;
                        case 'DateTime':
                            $parts[$column] = $column . " eq '" . $data[$column]->format(self::$DateFormat) . "'";
                            break;
                        default:
                            $parts[$column] = $column . " $defop '" . $data[$column] . "'";
                            break;
                    }
                } else {
                    switch ($value) {
                        case '!null':
                            $parts[$column] = $column . " is not null";
                            break;
                        case 'is empty':
                        case 'is not empty':
                        case 'is true':
                        case 'is false':
                            $parts[$column] = $column . ' ' . $value;
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
                                    if (count($condParts) == 1) {
                                        $parts[$column] = $column .= ' ' . $value;
                                    } else {
                                        $parts[$column] = $column .= ' ' . $condParts[0] . " '" . $condParts[1] . "'";
                                    }
                                    break;
                                default:
                                    if ($column == 'stitky') {
                                        $parts[$column] = $column . "='" . self::code($data[$column]) . "'";
                                    } else {
                                        $parts[$column] = $column . " $defop '" . $data[$column] . "'";
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
        return implode(' ' . $joiner . ' ', $parts);
    }

    /**
     * PHP Date object to AbraFlexi date format
     *
     * @param \DateTime $date
     */
    public static function dateToFlexiDate(\DateTime $date)
    {
        return $date->format(self::$DateFormat);
    }

    /**
     * PHP Date object to AbraFlexi date format
     *
     * @param \DateTime $dateTime
     */
    public static function dateToFlexiDateTime(\DateTime $dateTime)
    {
        return $dateTime->format(self::$DateTimeFormat);
    }


    /**
     * AbraFlexi date to PHP DateTime conversion
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00
     *
     * @return \DateTime | false
     */
    public static function flexiDateToDateTime(string $flexidate)
    {
        if (strstr($flexidate, '+')) {
            $format = self::$DateFormat . 'O';
        } elseif (strstr($flexidate, 'Z')) {
            $format = self::$DateFormat . 'Z';
        } else {
            $format = self::$DateFormat;
        }

        return \DateTime::createFromFormat($format, $flexidate)->setTime(0, 0);
    }

    /**
     * AbraFlexi dateTime to PHP DateTime conversion
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime | false
     */
    public static function flexiDateTimeToDateTime(string $flexidatetime)
    {
        if (strchr($flexidatetime, '.')) { //NewFormat
            $format = self::$DateTimeFormat;
        } else { // Old format
            $format = 'Y-m-d\TH:i:s+P';
        }
        return \DateTime::createFromFormat($format, $flexidatetime);
    }

    /**
     * Převede rekurzivně Objekt na pole.
     *
     * @param object|array $object
     *
     * @return array
     */
    public static function object2array($object)
    {
        $result = null;
        if (is_object($object)) {
            $objectData = get_object_vars($object);
            if (is_array($objectData) && count($objectData)) {
                $result = array_map('self::object2array', $objectData);
            }
        } else {
            if (is_array($object)) {
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
     * @param object|array $object
     *
     * @return array
     */
    public static function objectToID($object)
    {
        $resultID = null;
        if (is_object($object) && method_exists($object, '__toString')) {
            $resultID = $object->__toString();
        } else {
            if (is_array($object)) {
                foreach ($object as $item => $value) {
                    $resultID[$item] = self::objectToID($value);
                }
            } else { //String
                $resultID = $object;
            }
        }

        return $resultID;
    }

    /**
     * Prepare record ID to use in URL
     *
     * @param mixed $id
     *
     * @return string id ready for use in URL
     */
    public static function urlizeId($id)
    {
        if (is_array($id)) {
            $id = rawurlencode('(' . self::flexiUrl($id) . ')');
        } elseif (is_numeric($id)) {
            $id = strval($id);
        } elseif (preg_match('/^ext:/', strval($id))) {
            $id = self::urlEncode(strval($id));
        } elseif (preg_match('/^code:/', strval($id))) {
            $id = self::code(self::urlEncode(self::uncode(strval($id))));
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
            if (is_string($xml)) {
                $xml = simplexml_load_string($xml);
            }
            foreach ($xml->attributes() as $a) {
                $arr['@' . $a->getName()] = strval($a);
            }
            foreach ($xml->children() as $r) {
                if (count($r->children()) == 0) {
                    $arr[$r->getName()] = strval($r);
                } else {
                    $arr[$r->getName()][] = self::xml2array($r);
                }
            }
        }
        return $arr;
    }
}
