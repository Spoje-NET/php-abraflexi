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
 * @see https://demo.abraflexi.eu/c/demo/udalost/properties api udalost evidence
 */
class Udalost extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'udalost';
}
