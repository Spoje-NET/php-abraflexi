<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Položka skladového pohybu.
 *
 * @see https://demo.flexibee.eu/c/demo/objednavka-prijata-polozka/properties
 *
 * @no-named-arguments
 */
class ObjednavkaPrijataPolozka extends RW
{
    use stitky;

    /**
     * Evidence used by object.
     */
    public ?string $evidence = 'objednavka-prijata-polozka';
}
