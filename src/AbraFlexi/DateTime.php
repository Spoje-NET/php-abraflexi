<?php

/**
 * AbraFlexi - DateTime object.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2021-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of DateTime
 *
 * @author vitex
 */
class DateTime extends \DateTime
{
    /**
     * Support for Null values
     * @var bool
     */
    public /*bool*/ $isNull = false;

    /**
     * Default output format
     * @var string
     */
    public static $format = 'Y-m-d\TH:i:s.u+P';

    /**
     * AbraFlexi dateTime to PHP DateTime conversion
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime | false
     */
    public function __construct(string $flexidatetime = 'NOW')
    {
        $this->isNull = empty($flexidatetime);
        $format = '';
        if (strchr($flexidatetime, '.')) { //NewFormat
            $format = self::$format;
        } elseif (!empty($flexidatetime) && ($flexidatetime != 'NOW')) { // Old format
            $format = 'Y-m-d\TH:i:s+P';
        }
        if (empty($format)) {
            parent::__construct();
        } else {
            parent::__construct(\DateTime::createFromFormat($format, $flexidatetime)->format(\DateTimeInterface::ATOM));
        }
    }

    /**
     * Render Object as AbraFlexi::$DateTimeFormat
     *
     * @return string
     */
    public function __toString()
    {
        return $this->isNull ? '' : $this->format(self::$format);
    }
}
