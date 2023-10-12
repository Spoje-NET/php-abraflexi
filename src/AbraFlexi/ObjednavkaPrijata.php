<?php

declare(strict_types=1);

/**
 * AbraFlexi - Incoming order class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Incoming order
 *
 * @link https://demo.flexibee.eu/c/demo/objednavka-prijata/properties
 */
class ObjednavkaPrijata extends RW implements \AbraFlexi\Document
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
    public $evidence = 'objednavka-prijata';
}
