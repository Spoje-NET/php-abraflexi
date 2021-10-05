<?php

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Položka skladového pohybu
 *
 * @link https://demo.abraflexi.eu/c/demo/objednavka-prijata-polozka/properties
 */
class ObjednavkaPrijataPolozka extends RW {

    use Stitky;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata-polozka';

}
