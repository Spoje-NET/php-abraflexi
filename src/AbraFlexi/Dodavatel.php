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
 * Description of Dodavatel.
 *
 * @author vitex
 */
class Dodavatel extends RW
{
    use stitky;
    use firma;

    /**
     * The agenda used by the object.
     */
    public ?string $evidence = 'dodavatel';
}
