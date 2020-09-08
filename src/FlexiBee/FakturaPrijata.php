<?php

/**
 * FlexiBee - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace FlexiBee;

use FlexiBee\Firma;
use FlexiBee\RW;
use FlexiBee\Stitky;
use FlexiBee\SubItems;
use FlexiBee\Sum;

/**
 * Incoming invoice
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-prijata/properties
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
