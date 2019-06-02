<?php
/**
 * FlexiPeeHP - Objekt skladového pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Skladového pohyb
 *
 * @link https://demo.flexibee.eu/c/demo/skladovy-pohyb/properties
 */
class SkladovyPohyb extends FlexiBeeRW
{
    use Stitky;
    use Firma;
    use Sum;
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'skladovy-pohyb';

}
