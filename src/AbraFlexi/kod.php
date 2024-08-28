<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Add for evidencies with code: identifier.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait kod
{
    /**
     * Obtain record/object identificator code:
     * Vrací identifikátor objektu code:
     *
     * @see https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return string record code identifier
     */
    public function _getRecordCode()
    {
        return empty($this->getDataValue('kod')) ? null : self::code($this->getDataValue('kod'));
    }
}
