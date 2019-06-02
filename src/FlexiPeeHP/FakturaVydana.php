<?php
/**
 * FlexiPeeHP - Objekt vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Faktura vydaná
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-vydana/properties položky evidence
 */
class FakturaVydana extends FlexiBeeRW
{

    use Stitky;
    use Firma;
    use Sum;
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
        $sparovani                       = ['uhrazovanaFak' => $this];
        $sparovani['uhrazovanaFak@type'] = $this->evidence;
        $sparovani['zbytek']             = $zbytek;
        $doklad->insertToFlexiBee(['id' => $doklad, 'sparovani' => $sparovani]);
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
        $this->insertToFlexiBee();
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
        $this->insertToFlexiBee();
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
        $this->insertToFlexiBee();
        return $this->lastResponseCode == 201;
    }

    /**
     * add link to advance tax document
     * 
     * @param Banka|PokladniPohyb $income Income payment document
     * 
     * @return boolean success
     * 
     * @throws Exception
     */
    public function vytvorVazbuZDD($income)
    {
        switch (get_class($income)) {
            case 'FlexiPeeHP\\Banka':
                $modul = 'banka';
                break;
            case 'FlexiPeeHP\\PokladniPohyb':
                $modul = 'pokladna';
                break;
            default :
                throw new \Ease\Exception(_('Unsupported $income parameter type'));
        }

        $incomeId = $income->getRecordID();
        $myId     = $this->getRecordID();

        $headersBackup = $this->defaultHttpHeaders;

        $this->defaultHttpHeaders['Accept'] = 'text/html';
        $this->setPostFields(http_build_query(['modul' => $modul,
            'submit' => 'OK']));
        $this->performRequest($myId.'/vytvor-vazbu-zdd/'.$incomeId, 'GET',
            'json');

        $responseArr = explode("\n", $this->lastCurlResponse);
        $result      = true;
        $message     = '';
        foreach ($responseArr as $lineNo => $responseLine) {
            if (strstr($responseLine, '<ul class = "flexibee-errors">')) {
                $message = trim($responseArr[$lineNo + 1]);
                $result  = false;
            }
            if (strstr($responseLine, '<div class = "alert alert-success">')) {
                $message = strip_tags(html_entity_decode(trim($responseArr[$lineNo
                            + 1])));
                $result  = true;
            }
        }

        if ($result === true) {
            $this->addStatusMessage(empty($message) ? $this->getDataValue('kod').'/vytvor-vazbu-zdd/'.$income->getRecordCode()
                        : $message, 'success');
        } else {
            $this->addStatusMessage($this->getDataValue('kod').'/vytvor-vazbu-zdd/'.$incomeId,
                'warning');
        }

        $this->defaultHttpHeaders = $headersBackup;

        return $result;
    }

    /**
     * 
     * @param int $size requested of image
     * 
     * @return string binary PNG body
     */
    public function getQrCodeImage($size = 140)
    {
        $this->performRequest($this->getRecordID().'/qrcode.png?size='.$size,
            'GET', 'png');
        if ($this->lastResponseCode == 200) {
            return $this->lastCurlResponse;
        }
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
        return 'data: image/png;base64,'.base64_encode($this->getQrCodeImage($size));
    }

    /**
     * Get Number of days overdue
     * 
     * @param string $dueDate FlexiBee date
     * 
     * @return int
     */
    static public function overdueDays($dueDate)
    {
        $dateDiff = date_diff(is_object($dueDate) ? $dueDate : FlexiBeeRO::flexiDateToDateTime($dueDate),
            new \DateTime());
        if ($dateDiff->invert == 1) {
            $ddif = $dateDiff->days * -1;
        } else {
            $ddif = $dateDiff->days;
        }

        return $ddif;
    }
}
