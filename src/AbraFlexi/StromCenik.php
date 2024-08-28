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
 * Strom Položek ceníku.
 *
 * @see https://demo.flexibee.eu/c/demo/strom-cenik/properties Vlastnosti evidence
 */
class StromCenik extends RW
{
    /**
     * Evidence užitá objektem.
     */
    public string $evidence = 'strom-cenik';
}
