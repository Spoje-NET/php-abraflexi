<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Pokladní pohyb.
 *
 * @see https://demo.flexibee.eu/c/demo/pokladni-pohyb/properties položky evidence
 */
class PokladniPohyb extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;

    /**
     * Evidence AbraFlexi.
     */
    public ?string $evidence = 'pokladni-pohyb';
}
