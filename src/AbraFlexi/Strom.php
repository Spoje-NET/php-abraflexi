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
 * Obecný Strom.
 *
 * @see https://demo.flexibee.eu/c/demo/strom/properties vlastnosti evidence
 *
 * @no-named-arguments
 */
class Strom extends RW
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'strom';

    /**
     * Sloupeček se jménem záznamu.
     */
    public string $nameColumn = 'nazev';
}
