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
class Date extends \Date {

    public function __toString() {
        return $this->format(RO::$DateFormat);
    }
    
}
