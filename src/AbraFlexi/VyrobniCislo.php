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
 * Výrobní číslo.
 *
 * @see https://demo.flexibee.eu/c/demo/vyrobni-cislo/properties položky evidence
 *
 * @no-named-arguments
 */
class VyrobniCislo extends RW
{
    /**
     * Evidence used by object.
     */
    public ?string $evidence = 'vyrobni-cislo';
}
