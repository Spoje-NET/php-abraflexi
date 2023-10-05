<?php

/**
 * AbraFlexi - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Incoming invoice
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-prijata/properties
 */
class FakturaPrijata extends RW implements Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;

    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'faktura-prijata';
}
