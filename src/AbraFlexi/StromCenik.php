<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt přiřazení položek ceníku ku stromu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Strom Položek ceníku
 *
 * @link https://demo.flexibee.eu/c/demo/strom-cenik/properties Vlastnosti evidence
 */
class StromCenik extends RW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'strom-cenik';
}
