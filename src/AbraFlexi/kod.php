<?php

declare(strict_types=1);

/**
 * AbraFlexi - Code support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2024 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add for evidencies with code: identifier
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait kod
{
    /**
     * Obtain record/object identificator code:
     * Vrací identifikátor objektu code:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return string record code identifier
     */
    public function _getRecordCode()
    {
        return empty($this->getDataValue('kod')) ? null : self::code($this->getDataValue('kod'));
    }
}
