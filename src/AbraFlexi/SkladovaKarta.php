<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt Skladové karty.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Skladová Karta
 * Storage Card
 *
 * @link https://demo.flexibee.eu/c/demo/skladova-karta/properties položky evidence
 */
class SkladovaKarta extends RW
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     *
     * @var string
     */
    public $evidence = 'skladova-karta';
}
