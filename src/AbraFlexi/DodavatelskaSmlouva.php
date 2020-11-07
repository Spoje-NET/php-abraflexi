<?php

/**
 * AbraFlexi - Objekt dodavatelské smlouvy.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

use AbraFlexi\Firma;
use AbraFlexi\RW;
use AbraFlexi\Stitky;

/**
 * Dodavatelská smlouva
 *
 * @link https://demo.flexibee.eu/c/demo/dodavatelska-smlouva/properties
 */
class DodavatelskaSmlouva extends RW {

    use Stitky;
    use Firma;

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
    public function generateInvoices() {
        $this->performRequest('dodavatelska-smlouva/generovani-faktur.xml',
                'PUT', 'xml');
        return $this->lastResponseCode == 200;
    }

}
