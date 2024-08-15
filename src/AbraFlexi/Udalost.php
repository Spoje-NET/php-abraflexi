<?php

declare(strict_types=1);

/**
 * AbraFlexi - Event Object.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2024 Spoje.Net
 */

namespace AbraFlexi;

/**
 * @link https://demo.abraflexi.eu/c/demo/udalost/properties api udalost evidence
 */
class Udalost extends RW {

    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'udalost';
}
