<?php

declare(strict_types=1);

/**
 * AbraFlexi - Document Email support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2019 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add functions to use with "email" data column
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Email {

    public function getEmail() {
        return $this->getDataValue('email');
    }

}
