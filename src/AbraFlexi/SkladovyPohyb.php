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
 * @link https://demo.abraflexi.eu/c/demo/skladovy-pohyb/properties
 */
class SkladovyPohyb extends RW {

    use Stitky;
    use Firma;
    use Sum;
    use Email;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'skladovy-pohyb';

}
