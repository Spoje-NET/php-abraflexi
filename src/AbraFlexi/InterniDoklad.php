<?php

declare(strict_types=1);

/**
 * AbraFlexi - Internal Document.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2019 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Internal Document
 *
 * @link https://demo.flexibee.eu/c/demo/interni-doklad/properties
 */
class InterniDoklad extends RW {

    use Stitky;
    use Firma;
    use Sum;
    use Email;
    use GetChanges;

    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'interni-doklad';

}
