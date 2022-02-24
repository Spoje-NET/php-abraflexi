<?php

declare(strict_types=1);

/**
 * AbraFlexi - Pricelist class.
 *              Objekt ceníku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace AbraFlexi;

use AbraFlexi\RW;
use AbraFlexi\Stitky;
use AbraFlexi\SubItems;

/**
 * Ceník - Pricelist
 *
 * @link https://demo.flexibee.eu/c/demo/cenik/properties Vlastnosti evidence
 */
class Cenik extends RW {

    use Stitky;
    use SubItems;
    use GetChanges;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'cenik';

}
