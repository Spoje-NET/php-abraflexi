<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt skladového pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Skladového pohyb
 *
 * @link https://demo.flexibee.eu/c/demo/skladovy-pohyb/properties
 */
class SkladovyPohyb extends RW
{
    use stitky;
    use firma;
    use sum;
    use email;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'skladovy-pohyb';
}
