<?php
/**
 * FlexiPeeHP - Internal Document.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Internal Document
 *
 * @link https://demo.flexibee.eu/c/demo/interni-doklad/properties
 */
class InterniDoklad extends RW
{

    use Stitky;
    use Firma;
    use Sum;
    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'interni-doklad';

}
