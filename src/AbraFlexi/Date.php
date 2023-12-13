<?php

/**
 * AbraFlexi - Date object.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2021-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Date
 *
 * @author vitex
 */
class Date extends \DateTime
{
    /**
     * Support for Null values
     * @var bool
     */
    public $isNull = false;

    /**
     * AbraFlexi date to PHP DateTime conversion
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00 or "NOW"
     *
     * @return \DateTime | false
     */
    public function __construct(string $flexidate = 'NOW')
    {
        $this->isNull = empty($flexidate);
        $format = '';
        if (strstr($flexidate, '+')) {
            $format = Functions::$DateFormat . 'T';
        } elseif (strstr($flexidate, 'Z')) {
            $format = Functions::$DateFormat . 'Z';
        } elseif (!empty($flexidate) && ($flexidate != 'NOW')) {
            $format = Functions::$DateFormat;
            if (strstr($flexidate, ':')) {
                $format .= '-i:s';
            }
        }
        if (empty($format)) {
            parent::__construct();
        } else {
            parent::__construct(\DateTime::createFromFormat($format, $flexidate)
                            ->setTime(0, 0)->format(\DateTimeInterface::ATOM));
        }
    }

    /**
     * Render Object as AbraFlexi::$DateFormat
     *
     * @return string
     */
    public function __toString()
    {
        return $this->isNull ? '' : $this->format(Functions::$DateFormat);
    }
}
