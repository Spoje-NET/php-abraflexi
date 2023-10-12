<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt vyrobniho cisla.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Výrobní číslo
 *
 * @link https://demo.flexibee.eu/c/demo/vyrobni-cislo/properties položky evidence
 */
class VyrobniCislo extends RW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'vyrobni-cislo';
}
