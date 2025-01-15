<?php

/**
 * AbraFlexi - Pricelist class.
 *              Objekt ceníku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2024 Spoje.Net
 */

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
 * Ceník - Pricelist.
 *
 * @see https://demo.flexibee.eu/c/demo/cenik/properties Vlastnosti evidence
 */
class Cenik extends RW
{
    use stitky;
    use subItems;
    use getChanges;
    use kod;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'cenik';
}
