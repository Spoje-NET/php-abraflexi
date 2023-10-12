<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt stromu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Obecný Strom
 *
 * @link https://demo.flexibee.eu/c/demo/strom/properties vlastnosti evidence
 */
class Strom extends RW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'strom';

    /**
     * Sloupeček se jménem záznamu
     *
     * @var string
     */
    public $nameColumn = 'nazev';
}
