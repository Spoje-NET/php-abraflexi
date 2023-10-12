<?php

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Položka skladového pohybu
 *
 * @link https://demo.flexibee.eu/c/demo/objednavka-prijata-polozka/properties
 */
class ObjednavkaPrijataPolozka extends RW
{
    use stitky;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata-polozka';
}
