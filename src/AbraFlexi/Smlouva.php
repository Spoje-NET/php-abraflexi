<?php

declare(strict_types=1);

/**
 * AbraFlexi - Contract Class.
 *              Objekt Smlouvy.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Smlouva
 *
 * @link https://demo.flexibee.eu/c/demo/smlouva/properties Vlastnosti evidence
 */
class Smlouva extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'smlouva';

    /**
     * Generuje faktury ze smluv. Pokud je nastaven sloupec <strong>id</strong> generují se pouze z této smlouvy.
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/generovani-faktur/ Interní dokumentace
     *
     * @return boolean
     */
    public function generovaniFaktur()
    {
        $this->performRequest(
            ($this->getMyKey() ? $this->getMyKey() . '/' : '' ) . 'generovani-faktur',
            'PUT'
        );
        return $this->lastResponseCode == 200;
    }
}
