<?php

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Incoming order
 *
 * @link https://demo.flexibee.eu/c/demo/objednavka-prijata/properties
 */
class ObjednavkaPrijata extends RW {

    use stitky;
    use firma;
    use sum;
    use email;
    use getChanges;

    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'objednavka-prijata';

}
