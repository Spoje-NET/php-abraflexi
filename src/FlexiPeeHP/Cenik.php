<?php

/**
 * FlexiPeeHP - Pricelist class.
 *              Objekt ceníku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace FlexiPeeHP;

use FlexiPeeHP\FlexiBeeRW;
use FlexiPeeHP\Stitky;
use FlexiPeeHP\SubItems;


/**
 * Ceník - Pricelist
 *
 * @link https://demo.flexibee.eu/c/demo/cenik/properties Vlastnosti evidence
 */
class Cenik extends FlexiBeeRW
{
    use Stitky;
    use SubItems;
    
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'cenik';

}
