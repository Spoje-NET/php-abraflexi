<?php

/**
 * AbraFlexi - DateTime object.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of DateTime
 *
 * @author vitex
 */
class DateTime extends \DateTime {

    /**
     * AbraFlexi dateTime to PHP DateTime conversion
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime | false
     */
    public function __construct(string $flexidatetime) {
        if (strchr($flexidatetime, '.')) { //NewFormat
            $format = RO::$DateTimeFormat;
        } else { // Old format
            $format = 'Y-m-d\TH:i:s+P';
        }
        parent::__construct(\DateTime::createFromFormat($format, $flexidatetime)->format(\DateTimeInterface::ATOM));
    }

    /**
     * Render Object as AbraFlexi::$DateTimeFormat
     * 
     * @return string
     */
    public function __toString() {
        return $this->format(RO::$DateTimeFormat);
    }

}
