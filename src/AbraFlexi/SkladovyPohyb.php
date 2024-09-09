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
 * Skladového pohyb.
 *
 * @see https://demo.flexibee.eu/c/demo/skladovy-pohyb/properties
 */
class SkladovyPohyb extends RW
{
    use stitky;
    use firma;
    use sum;
    use email;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'skladovy-pohyb';
}
