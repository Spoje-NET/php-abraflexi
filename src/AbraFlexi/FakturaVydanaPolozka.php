<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt položky vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Polozka Faktury vydané
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-vydana-polozka/properties položky evidence
 */
class FakturaVydanaPolozka extends RW
{
    use stitky;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana-polozka';
}
