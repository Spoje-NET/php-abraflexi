<?php

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Incoming order
 *
 * @link https://demo.abraflexi.eu/c/demo/objednavka-prijata/properties
 */
class ObjednavkaPrijata extends RW {

    use Stitky;
    use Firma;
    use Sum;
    use Email;

    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata';

}
