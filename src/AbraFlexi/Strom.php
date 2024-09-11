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
 * Obecný Strom.
 *
 * @see https://demo.flexibee.eu/c/demo/strom/properties vlastnosti evidence
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
