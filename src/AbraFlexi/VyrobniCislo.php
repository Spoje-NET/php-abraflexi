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
 * Výrobní číslo.
 *
 * @see https://demo.flexibee.eu/c/demo/vyrobni-cislo/properties položky evidence
 */
class VyrobniCislo extends RW
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'vyrobni-cislo';
}
