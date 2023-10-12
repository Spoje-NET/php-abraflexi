<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt Pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Pokladní pohyb
 *
 * @link https://demo.flexibee.eu/c/demo/pokladni-pohyb/properties položky evidence
 */
class PokladniPohyb extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;

    /**
     * Evidence AbraFlexi.
     *
     * @var string
     */
    public $evidence = 'pokladni-pohyb';
}
