<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt účetního období.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Class for Accounting period handling.
 *
 * @link https://demo.flexibee.eu/c/demo/ucetni-obdobi/properties Položky evidence
 * @author vitex
 */
class UcetniObdobi extends RW
{
    /**
     * Evidence AbraFlexi
     * @var string
     */
    public $evidence = 'ucetni-obdobi';
}
