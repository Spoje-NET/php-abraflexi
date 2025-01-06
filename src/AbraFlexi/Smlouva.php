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
 * Smlouva.
 *
 * @see https://demo.flexibee.eu/c/demo/smlouva/properties Vlastnosti evidence
 */
class Smlouva extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'smlouva';

    /**
     * Generuje faktury ze smluv. Pokud je nastaven sloupec <strong>id</strong> generují se pouze z této smlouvy.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/generovani-faktur/ Interní dokumentace
     *
     * @return bool
     */
    public function generovaniFaktur(): bool
    {
        $this->performRequest(
            ($this->getMyKey() ? $this->getMyKey().'/' : '').'generovani-faktur',
            'PUT',
        );

        return $this->lastResponseCode === 200;
    }
}
