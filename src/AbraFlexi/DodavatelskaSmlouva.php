<?php

/**
 * AbraFlexi - Objekt dodavatelské smlouvy.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

use AbraFlexi\firma;
use AbraFlexi\RW;
use AbraFlexi\stitky;

/**
 * Dodavatelská smlouva
 *
 * @link https://demo.flexibee.eu/c/demo/dodavatelska-smlouva/properties
 */
class DodavatelskaSmlouva extends RW
{
    use stitky;
    use subItems;
    use firma;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'dodavatelska-smlouva';

    /**
     * Generate invoices from contracts.
     * Vygeneruje faktury ze smluv.
     *
     * @return boolean operation success
     */
    public function generateInvoices()
    {
        $this->performRequest('dodavatelska-smlouva/generovani-faktur.xml', 'PUT', 'xml');
        return $this->lastResponseCode == 200;
    }
}
