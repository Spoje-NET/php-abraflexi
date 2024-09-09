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
 * Polozka Faktury vydané.
 *
 * @see https://demo.flexibee.eu/c/demo/faktura-vydana-polozka/properties položky evidence
 */
class FakturaVydanaPolozka extends RW
{
    use stitky;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'faktura-vydana-polozka';
}
