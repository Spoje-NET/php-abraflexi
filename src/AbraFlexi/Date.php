<?php

/**
 * AbraFlexi - Date object.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Date
 *
 * @author vitex
 */
class Date extends \DateTime {

    /**
     * Support for Null values
     * @var bool
     */
    public bool $isNull = false;

    /**
     * AbraFlexi date to PHP DateTime conversion
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00 or "NOW"
     *
     * @return \DateTime | false
     */
    public function __construct(string $flexidate = 'NOW') {
        $this->isNull = empty($flexidate);
        $format = '';
        if (strstr($flexidate, '+')) {
            $format = RO::$DateFormat . 'O';
        } elseif (strstr($flexidate, 'Z')) {
            $format = RO::$DateFormat . 'Z';
        } elseif ( !empty ($flexidate) && ($flexidate != 'NOW')) {
            $format = RO::$DateFormat;
        }
        if(strstr($flexidate, ':')){ // ?!?!?
            $flexidate = substr($flexidate,0, -6);
        }
        parent::__construct(empty($format) ? null : \DateTime::createFromFormat($format, $flexidate)->setTime(0, 0)->format(\DateTimeInterface::ATOM));
    }

    /**
     * Render Object as AbraFlexi::$DateFormat
     * 
     * @return string
     */
    public function __toString() {
        return $this->isNull ? null : $this->format(RO::$DateFormat);
    }

}
