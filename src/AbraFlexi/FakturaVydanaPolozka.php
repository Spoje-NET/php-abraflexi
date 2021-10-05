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
 * @link https://demo.abraflexi.eu/c/demo/faktura-vydana-polozka/properties položky evidence
 */
class FakturaVydanaPolozka extends RW {

    use Stitky;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana-polozka';

}
