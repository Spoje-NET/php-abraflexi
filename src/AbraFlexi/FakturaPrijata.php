<?php

declare(strict_types=1);

/**
 * AbraFlexi - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace AbraFlexi;

use AbraFlexi\Firma;
use AbraFlexi\RW;
use AbraFlexi\Stitky;
use AbraFlexi\SubItems;
use AbraFlexi\Sum;

/**
 * Incoming invoice
 *
 * @link https://demo.abraflexi.eu/c/demo/faktura-prijata/properties
 */
class FakturaPrijata extends RW {

    use Stitky;
    use Firma;
    use Sum;
    use SubItems;

    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'faktura-prijata';

}
