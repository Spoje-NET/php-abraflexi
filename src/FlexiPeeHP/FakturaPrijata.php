<?php

/**
 * FlexiPeeHP - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace FlexiPeeHP;

use FlexiPeeHP\Firma;
use FlexiPeeHP\FlexiBeeRW;
use FlexiPeeHP\Stitky;
use FlexiPeeHP\SubItems;
use FlexiPeeHP\Sum;

/**
 * Incoming invoice
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-prijata/properties
 */
class FakturaPrijata extends FlexiBeeRW {

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
