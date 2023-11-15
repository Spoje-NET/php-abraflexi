<?php

/**
 * AbraFlexi - Pricelist class.
 *              Objekt ceníku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

use AbraFlexi\RW;
use AbraFlexi\stitky;
use AbraFlexi\subItems;

/**
 * Ceník - Pricelist
 *
 * @link https://demo.flexibee.eu/c/demo/cenik/properties Vlastnosti evidence
 */
class Cenik extends RW
{
    use stitky;
    use subItems;
    use getChanges;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'cenik';
}
