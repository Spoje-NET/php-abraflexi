<?php

/**
 * AbraFlexi - Internal Document.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Internal Document
 *
 * @link https://demo.flexibee.eu/c/demo/interni-doklad/properties
 */
class InterniDoklad extends RW implements \AbraFlexi\Document
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
    public $evidence = 'interni-doklad';
}
