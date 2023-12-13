<?php

/**
 * AbraFlexi - Objekt vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

/**
 * Faktura vydaná
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-vydana/properties položky evidence
 */
class FakturaVydana extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana';

    /**
     * Provede spárování platby s dokladem
     *
     * @link https://demo.flexibee.eu/devdoc/parovani-plateb Párování plateb
     *
     * @param $doklad Banka|PokladniPohyb|InterniDoklad S jakým dokladem spárovat ?
     * @param $zbytek string ne|zauctovat|ignorovat|castecnaUhrada|castecnaUhradaNeboZauctovat|castecnaUhradaNeboIgnorovat
     *
     * @return boolean success
     */
    public function sparujPlatbu($doklad, $zbytek = 'ignorovat')
    {
        $sparovani = ['uhrazovanaFak' => $this];
        $sparovani['uhrazovanaFak@type'] = $this->evidence;
        $sparovani['zbytek'] = $zbytek;
        $doklad->insertToAbraFlexi(['id' => $doklad, 'sparovani' => $sparovani]);
        return $doklad->lastResponseCode == 201;
    }

    /**
     *  Hotovostní platba faktury.
     *
     * @link https://demo.flexibee.eu/devdoc/hotovostni-uhrada/ Hotovostní úhrada
     * @link https://demo.flexibee.eu/c/demo/pokladna Pokladny
     * @link https://demo.flexibee.eu/c/demo/typ-pokladni-pohyb Typy dokladů
     * @param float $value částka k úhradě
     * @param array $uhrada pole nepoviných vlastností úhrady s těmito možnými položkami:
     *        string|Pokladna  'pokladna' identifikátor pokladny
     *        string  'typDokl' kod typu pokladniho dokladu
     *        boolean 'kurzKDatuUhrady'
     *        string  'uhrazujiciDokl' Pokud uvedeno není, vždy se vytvoří nový
     *                                pokladní doklad.
     *        string  'rada' dokladová řada pro vytvářený pokladní doklad.
     *                      Např.:code:POKLADNA+
     *        string  'datumUhrady' sql formát. Výchozí: dnes
     *
     * @return boolean výsledek pokusu o provedení úhrady
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
        return $this->lastResponseCode == 201;
    }

    /**
     * Odpočet zálohy (vystavení daňového dokladu k platbě)
     *
     * @link https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     * @param FakturaVydana $invoice zálohová faktura
     * @param array $odpocet Vlastnosti odpočtu
     *
     * @return boolean success
     */
    public function odpocetZalohy($invoice, $odpocet = [])
    {
        if (!isset($odpocet['castkaMen'])) {
            $odpocet['castkaMen'] = $invoice->getDataValue('sumCelkem');
        }
        $odpocet['doklad'] = $invoice;

        $this->setDataValue('odpocty-zaloh', ['odpocet' => $odpocet]);
        $this->insertToAbraFlexi();
        return $this->lastResponseCode == 201;
    }

    /**
     * Odpočet ZDD
     *
     * @link https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     * @param FakturaVydana $invoice zálohová faktura
     * @param array $odpocet Vlastnosti odpočtu
     *
     * @return boolean success
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
        return $this->lastResponseCode == 201;
    }

    /**
     * add link to advance tax document
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/vazby-zdd/ vazby-zdd
     *
     * @param Banka|PokladniPohyb $income Income payment document
     *
     * @return boolean success
     */
    public function vytvorVazbuZDD($income)
    {
        $classHelper = explode('\\', get_class($income));
        $bondRequest = [
            'id' => $this->getRecordIdent(),
            'vytvor-vazbu-zdd' => [
                'uhrada' => $income->getRecordIdent(),
                'uhrada@type' => strtolower(end($classHelper))
            ]
        ];
        $this->insertToAbraFlexi($bondRequest);
        return $this->lastResponseCode == 201;
    }

    /**
     * Remove Advance tax document bondig
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/vazby-zdd/ vazby-zdd
     *
     * @param int|string $id Invoice record identifier
     *
     * @return boolean operation success
     */
    public function zrusVazbuZdd($id = null)
    {
        $unbondRequest = [
            'id' => is_null($id) ? $this->getRecordIdent() : $id,
            'zrus-vazbu-zdd'
        ];

        $this->insertToAbraFlexi($unbondRequest);
        return $this->lastResponseCode == 201;
    }

    /**
     *
     * @param int $size requested of image
     *
     * @return string binary PNG body
     */
    public function getQrCodeImage($size = 140)
    {
        $this->performRequest(
            $this->getRecordID() . '/qrcode.png?size=' . $size,
            'GET',
            'png'
        );
        return $this->lastResponseCode == 200 ? $this->lastCurlResponse : '';
    }

    /**
     * Get base64 encoded QrCode image
     *
     * @param int $size requested of image
     *
     * @return string IMG SRC code
     */
    public function getQrCodeBase64($size = 140)
    {
        return 'data: image/png;base64,' . base64_encode($this->getQrCodeImage($size));
    }

    /**
     * Get Number of days overdue
     *
     * @param string|Date $dueDate AbraFlexi date
     *
     * @return int
     */
    public static function overdueDays($dueDate)
    {
        if (is_object($dueDate) && array_key_exists('isNull', get_class_vars(get_class($dueDate)))  && ($dueDate->isNull === true)) {
            throw new Exception('$dueDate->isNull is true', new self());
        }
        $dateDiff = date_diff(
            is_object($dueDate) ? $dueDate : Functions::flexiDateToDateTime($dueDate),
            new \DateTime()
        );
        if ($dateDiff->invert == 1) {
            $ddif = $dateDiff->days * -1;
        } else {
            $ddif = $dateDiff->days;
        }

        return $ddif;
    }

    /**
     * Add Data to invoice subItem
     *
     * @see Relations
     *
     * @param array   $data pole dat
     * @param string  $relationPath path evidence (relation) pro vkládaná data
     * @param boolean $removeAll
     *
     * @return boolean Operation success
     */
    public function addArrayToBranch($data, $relationPath = 'polozkyFaktury', $removeAll = false)
    {
        return parent::addArrayToBranch($data, $relationPath, $removeAll);
    }
}
