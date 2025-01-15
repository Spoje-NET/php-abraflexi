<?php

/**
 * AbraFlexi - Internal Document.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
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
 * Internal Document.
 *
 * @see https://demo.flexibee.eu/c/demo/interni-doklad/properties
 */
class InterniDoklad extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;
    use lock;

    /**
     * Evidence použitá třídou.
     */
    public ?string $evidence = 'interni-doklad';
}
