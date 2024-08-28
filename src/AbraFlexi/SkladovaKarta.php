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
 * Skladová Karta
 * Storage Card.
 *
 * @see https://demo.flexibee.eu/c/demo/skladova-karta/properties položky evidence
 */
class SkladovaKarta extends RW
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     */
    public string $evidence = 'skladova-karta';
}
