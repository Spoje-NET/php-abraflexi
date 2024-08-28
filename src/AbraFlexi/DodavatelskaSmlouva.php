<?php

/**
 * AbraFlexi - Objekt dodavatelské smlouvy.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

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
 * Dodavatelská smlouva.
 *
 * @see https://demo.flexibee.eu/c/demo/dodavatelska-smlouva/properties
 */
class DodavatelskaSmlouva extends RW
{
    use stitky;
    use subItems;
    use firma;

    /**
     * Evidence užitá objektem.
     */
    public string $evidence = 'dodavatelska-smlouva';

    /**
     * Generate invoices from contracts.
     * Vygeneruje faktury ze smluv.
     *
     * @return bool operation success
     */
    public function generateInvoices()
    {
        $this->performRequest('dodavatelska-smlouva/generovani-faktur.xml', 'PUT', 'xml');

        return $this->lastResponseCode === 200;
    }
}
