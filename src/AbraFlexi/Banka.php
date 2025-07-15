<?php

/**
 * AbraFlexi - Bank Class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2025 Spoje.Net
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
 * Banka.
 *
 * @see https://demo.flexibee.eu/c/demo/banka/properties Vlastnosti evidence
 *
 * @no-named-arguments
 */
class Banka extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use email;
    use subItems;
    use getChanges;
    use sum;
    use kod;
    use lock;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'banka';

    /**
     * Stáhne bankovní výpisy  ( trvá delší dobu ).
     *
     * @return bool
     */
    public function stahnoutVypisyOnline()
    {
        $this->performRequest('nacteni-vypisu-online.json', 'PUT', 'txt');

        return $this->lastResponseCode === 200;
    }

    /**
     * Start invoice automatic matching process ( it takes longer time )
     * Spustí proces automatického párování plateb. ( trvá delší dobu ).
     *
     * @see https://demo.flexibee.eu/devdoc/parovani-plateb Interní dokumentace
     *
     * @param bool   $advanced Use Advanced matching method ?
     * @param string $filter   Filter bank records before pairing ?
     */
    public function automatickeParovani($advanced = false, $filter = null): bool
    {
        $filterUrl = $filter === null ? '' : rtrim($filter, '/').'/';
        $this->performRequest($filterUrl.'automaticke-parovani'.($advanced ? '-pokrocile' : ''), 'PUT');

        return $this->lastResponseCode === 200;
    }
}
