<?php

/**
 * AbraFlexi - Issued Invoice Object.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
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
 * Issued Invoice
 *
 * @see https://demo.flexibee.eu/c/demo/faktura-vydana/properties Evidence properties
 *
 * @no-named-arguments
 */
class FakturaVydana extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;
    use kod;
    use lock;

    /**
     * Evidence used by object.
     */
    public ?string $evidence = 'faktura-vydana';

    /**
     * Perform payment matching with document.
     *
     * @see https://demo.flexibee.eu/devdoc/parovani-plateb Payment matching
     *
     * @param Banka|PokladniPohyb|InterniDoklad $doklad    Which document to match with?
     * @param string                            $zbytek    ne|zauctovat|ignorovat|castecnaUhrada|castecnaUhradaNeboZauctovat|castecnaUhradaNeboIgnorovat
     * @param string                            $overpayTo Code of document type for overpayment - https://podpora.flexibee.eu/cs/articles/6091847-vytvoreni-preplatku-pomoci-rest-api
     *
     * @return bool Success
     */
    public function sparujPlatbu($doklad, $zbytek = 'ignorovat', string $overpayTo = '')
    {
        $sparovani = ['uhrazovanaFak' => $this];
        $sparovani['uhrazovanaFak@type'] = $this->evidence;
        $sparovani['zbytek'] = $zbytek;

        $match = ['id' => $doklad, 'sparovani' => $sparovani];

        if ($overpayTo) {
            $match['preplatek']['typDokl'] = \AbraFlexi\Functions::code($overpayTo);
        }

        $doklad->insertToAbraFlexi($match);

        return $doklad->lastResponseCode === 201;
    }

    /**
     * Cash payment of invoice.
     *
     * @see https://demo.flexibee.eu/devdoc/hotovostni-uhrada/ Cash payment
     * @see https://demo.flexibee.eu/c/demo/pokladna Cash registers
     * @see https://demo.flexibee.eu/c/demo/typ-pokladni-pohyb Document types
     *
     * @param float                $value  Amount to pay
     * @param array<string, mixed> $uhrada Array of optional payment properties with these possible items:
     *                                    string|Pokladna  'pokladna' cash register identifier
     *                                    string  'typDokl' cash document type code
     *                                    boolean 'kurzKDatuUhrady'
     *                                    string  'uhrazujiciDokl' If not specified, new cash document is always created
     *                                    string  'rada' document series for created cash document. E.g.:code:POKLADNA+
     *                                    string  'datumUhrady' SQL format. Default: today
     *
     * @return bool Result of payment attempt
     */
    public function hotovostniUhrada($value, $uhrada = [])
    {
        if (!isset($uhrada['pokladna'])) {
            $uhrada['pokladna'] = 'code:POKLADNA KČ';
        }

        if (!isset($uhrada['typDokl'])) {
            $uhrada['typDokl'] = 'code:STANDARD';
        }

        if (!isset($uhrada['kurzKDatuUhrady'])) {
            $uhrada['kurzKDatuUhrady'] = false;
        }

        if (!isset($uhrada['datumUhrady'])) {
            $uhrada['datumUhrady'] = date('Y-m-d');
        }

        $uhrada['castka'] = $value;

        $this->setDataValue('hotovostni-uhrada', $uhrada);
        $this->insertToAbraFlexi();

        return $this->lastResponseCode === 201;
    }

    /**
     * Odpočet zálohy (vystavení daňového dokladu k platbě).
     *
     * @see https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     *
     * @param FakturaVydana $invoice zálohová faktura
     * @param array         $odpocet Vlastnosti odpočtu
     *
     * @return bool success
     */
    public function odpocetZalohy($invoice, $odpocet = [])
    {
        if (!isset($odpocet['castkaMen'])) {
            $odpocet['castkaMen'] = $invoice->getDataValue('sumCelkem');
        }

        $odpocet['doklad'] = $invoice;

        $this->setDataValue('odpocty-zaloh', ['odpocet' => $odpocet]);
        $this->insertToAbraFlexi();

        return $this->lastResponseCode === 201;
    }

    /**
     * Odpočet ZDD.
     *
     * @see https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     *
     * @param FakturaVydana $invoice zálohová faktura
     * @param array         $odpocet Vlastnosti odpočtu
     *
     * @return bool success
     */
    public function odpocetZDD($invoice, $odpocet = [])
    {
        if (!isset($odpocet['castkaZaklMen'])) {
            $odpocet['castkaZaklMen'] = $invoice->getDataValue('sumZklZakl');
        }

        if (!isset($odpocet['castkaSnizMen'])) {
            $odpocet['castkaSnizMen'] = $invoice->getDataValue('sumZklSniz');
        }

        if (!isset($odpocet['castkaSniz2Men'])) {
            $odpocet['castkaSniz2Men'] = $invoice->getDataValue('sumZklSniz2');
        }

        if (!isset($odpocet['castkaOsvMen'])) {
            $odpocet['castkaOsvMen'] = $invoice->getDataValue('sumOsv');
        }

        if (!isset($odpocet['id'])) {
            $odpocet['id'] = 'ext:odpocet1';
        }

        $odpocet['doklad'] = $invoice;

        $this->setDataValue('odpocty-zaloh', ['odpocet' => $odpocet]);
        $this->insertToAbraFlexi();

        return $this->lastResponseCode === 201;
    }

    /**
     * add link to advance tax document.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/vazby-zdd/ vazby-zdd
     *
     * @param Banka|PokladniPohyb $income Income payment document
     *
     * @return bool success
     */
    public function vytvorVazbuZDD($income)
    {
        $classHelper = explode('\\', $income::class);
        $bondRequest = [
            'id' => $this->getRecordIdent(),
            'vytvor-vazbu-zdd' => [
                'uhrada' => $income->getRecordIdent(),
                'uhrada@type' => strtolower(end($classHelper)),
            ],
        ];
        $this->insertToAbraFlexi($bondRequest);

        return $this->lastResponseCode === 201;
    }

    /**
     * Remove Advance tax document bondig.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/vazby-zdd/ vazby-zdd
     *
     * @param int|string $id Invoice record identifier
     *
     * @return bool operation success
     */
    public function zrusVazbuZdd($id = null)
    {
        $unbondRequest = [
            'id' => null === $id ? $this->getRecordIdent() : $id,
            'zrus-vazbu-zdd',
        ];

        $this->insertToAbraFlexi($unbondRequest);

        return $this->lastResponseCode === 201;
    }

    /**
     * @param int $size requested of image
     *
     * @return string binary PNG body
     */
    public function getQrCodeImage($size = 140)
    {
        $this->performRequest(
            $this->getRecordID().'/qrcode.png?size='.$size,
            'GET',
            'png',
        );

        return $this->lastResponseCode === 200 ? $this->lastCurlResponse : '';
    }

    /**
     * Get base64 encoded QrCode image.
     *
     * @param int $size requested of image
     *
     * @return string IMG SRC code
     */
    public function getQrCodeBase64($size = 140)
    {
        return 'data: image/png;base64,'.base64_encode($this->getQrCodeImage($size));
    }

    /**
     * Get Number of days overdue.
     *
     * @param Date|string $dueDate AbraFlexi date
     *
     * @return int
     */
    public static function overdueDays($dueDate)
    {
        if (\is_object($dueDate) && \array_key_exists('isNull', get_class_vars($dueDate::class)) && ($dueDate->isNull === true)) {
            throw new Exception('$dueDate->isNull is true', new self());
        }

        $dateDiff = date_diff(
            \is_object($dueDate) ? $dueDate : Functions::flexiDateToDateTime($dueDate),
            new \DateTime(),
        );

        if ($dateDiff->invert === 1) {
            $ddif = $dateDiff->days * -1;
        } else {
            $ddif = $dateDiff->days;
        }

        return $ddif;
    }

    /**
     * Add Data to invoice subItem.
     *
     * @see Relations
     *
     * @param array  $data         pole dat
     * @param string $relationPath path evidence (relation) pro vkládaná data
     * @param bool   $removeAll
     *
     * @return bool Operation success
     */
    public function addArrayToBranch($data, $relationPath = 'polozkyFaktury', $removeAll = false)
    {
        return parent::addArrayToBranch($data, $relationPath, $removeAll);
    }
}
