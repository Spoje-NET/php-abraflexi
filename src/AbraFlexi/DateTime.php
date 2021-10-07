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
    public function __toString() {
        return $this->format(RO::$DateTimeFormat);
    }
}
