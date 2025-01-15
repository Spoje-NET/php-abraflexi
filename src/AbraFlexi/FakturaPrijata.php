<?php

/**
 * AbraFlexi - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
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
 * Incoming invoice.
 *
 * @see https://demo.flexibee.eu/c/demo/faktura-prijata/properties
 */
class FakturaPrijata extends RW implements Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;
    use kod;
    use lock;

    /**
     * Evidence použitá třídou.
     */
    public ?string $evidence = 'faktura-prijata';
}
