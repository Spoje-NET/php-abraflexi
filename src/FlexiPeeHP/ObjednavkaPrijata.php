<?php


namespace FlexiPeeHP;

/**
 * Incoming order
 *
 * @link https://demo.flexibee.eu/c/demo/objednavka-prijata/properties
 */
class ObjednavkaPrijata extends RW
{
    use Stitky;
    use Firma;
    use Sum;
    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata';

}
