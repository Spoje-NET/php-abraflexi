<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt Pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Pokladní pohyb
 *
 * @link https://demo.flexibee.eu/c/demo/pokladni-pohyb/properties položky evidence
 */
class PokladniPohyb extends RW {

    use Stitky;
    use Firma;
    use Sum;
    use Email;

    /**
     * Evidence AbraFlexi.
     *
     * @var string
     */
    public $evidence = 'pokladni-pohyb';

}
