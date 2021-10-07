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
     * AbraFlexi date to PHP DateTime conversion
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00
     *
     * @return \DateTime | false
     */
    public function __construct(string $flexidate) {
        if (strstr($flexidate, '+')) {
            $format = RO::$DateFormat . 'O';
        } elseif (strstr($flexidate, 'Z')) {
            $format = RO::$DateFormat . 'Z';
        } else {
            $format = RO::$DateFormat;
        }
        parent::__construct(\DateTime::createFromFormat($format, $flexidate)->setTime(0, 0)->format(\DateTimeInterface::ATOM));
    }

    /**
     * Render Object as AbraFlexi::$DateFormat
     * 
     * @return string
     */
    public function __toString() {
        return $this->format(RO::$DateFormat);
    }

}
