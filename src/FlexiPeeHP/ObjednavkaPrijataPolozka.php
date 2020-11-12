<?php


namespace FlexiPeeHP;

/**
 * Položka skladového pohybu
 *
 * @link https://demo.flexibee.eu/c/demo/objednavka-prijata-polozka/properties
 */
class ObjednavkaPrijataPolozka extends RW
{
    use Stitky;
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata-polozka';


}
