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

namespace Test\AbraFlexi;

use AbraFlexi\FakturaVydana;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-27 at 17:32:11.
 */
class FakturaVydanaTest extends RWTest
{
    protected FakturaVydana $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new FakturaVydana();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * Prepare Testing Invoice.
     *
     * @param array $initialData
     * @param mixed $dayBack
     * @param mixed $evidence
     *
     * @return \AbraFlexi\FakturaVydana
     */
    public static function makeTestInvoice(
        $initialData = [],
        $dayBack = 1,
        $evidence = 'vydana'
    ) {
        $yesterday = new \DateTime();
        $yesterday->modify('-'.$dayBack.' day');
        $testCode = 'TEST_'.time();
        $invoice = new \AbraFlexi\FakturaVydana(
            null,
            ['evidence' => 'faktura-'.$evidence],
        );

        if (($evidence === 'prijata') && !\array_key_exists('cisDosle', $initialData)) {
            $initialData['cisDosle'] = time();
        }

        $invoice->takeData(array_merge([
            'kod' => $testCode,
            'varSym' => \Ease\Functions::randomNumber(1111, 9999),
            'specSym' => \Ease\Functions::randomNumber(111, 999),
            'bezPolozek' => true,
            'popis' => 'AbraFlexi Test invoice',
            'datVyst' => \AbraFlexi\RO::dateToFlexiDate($yesterday),
            'typDokl' => \AbraFlexi\RO::code('FAKTURA'),
        ], $initialData));

        if ($invoice->sync()) {
            $invoice->addStatusMessage(
                $invoice->getApiURL().' '.\AbraFlexi\Functions::uncode((string)$invoice->getDataValue('typDokl')).' '.\AbraFlexi\Functions::uncode((string)$invoice->getRecordIdent()).' '.\AbraFlexi\Functions::uncode((string)$invoice->getDataValue('sumCelkem')).' '.\AbraFlexi\Functions::uncode((string)$invoice->getDataValue('mena')),
                'success',
            );
        } else {
            $invoice->addStatusMessage(json_encode($invoice->getData()), 'debug');
        }

        return $invoice;
    }

    /**
     * Gives You new testng invoice.
     *
     * @param string $code      with givew code of internal ID
     * @param array  $overrides with given values
     *
     * @return FakturaVydana
     */
    public static function getNew($code = 'UnitTest', $overrides = [])
    {
        $helper = new self();
        $helper->setUp();
        $helper->object->sync(array_merge(
            $helper->getDataForInsert($code),
            $overrides,
        ));

        return $helper->object;
    }

    /**
     * Gives You data able to insert into current evidence.
     *
     * @param string $code custom record code
     *
     * @return array
     */
    public function getDataForInsert($code = 'UnitTest')
    {
        $dataForInsert = parent::getDataForInsert($code);
        $dataForInsert['typDokl'] = 'code:FAKTURA';
        $adresar = new \AbraFlexi\Adresar();
        $candidates = $adresar->getColumnsFromAbraFlexi('id');
        $dataForInsert['firma'] = $candidates[array_rand($candidates)]['id'];
        $dataForInsert['sumZklZakl'] = \Ease\Functions::randomNumber(1000, 9999);
        $dataForInsert['varSym'] = $dataForInsert['kod'] = time();
        $dataForInsert['bezPolozek'] = true;

        return $dataForInsert;
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::hotovostniUhrada
     */
    public function testhotovostniUhrada(): void
    {
        $this->makeInvoice();
        $this->object->unsetDataValue('kod');
        $this->object->hotovostniUhrada($this->object->getDataValue('sumCelkZakl'));
        $this->assertEquals(
            201,
            $this->object->lastResponseCode,
            _('Invoice settle error'),
        );
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::sparujPlatbu
     */
    public function testsparujPlatbu(): void
    {
        $this->makeInvoice();
        $doklad = new \AbraFlexi\PokladniPohyb();
        $value = $this->object->getDataValue('sumCelkZakl');
        $dataPohybu = [
            'kod' => 'FP'.time(),
            'typDokl' => 'code:STANDARD',
            'typPohybuK' => 'typPohybu.prijem',
            'datVyst' => date('Y-m-d', time() - 60 * 60 * 24),
            'jakUhrK' => 'jakUhrazeno.rucne1',
            'pokladna' => 'code:POKLADNA KČ',
            'generovatSkl' => false,
            'zdrojProSkl' => false,
            'firma' => $this->object->getDataValue('firma'),
            'bezPolozek' => true,
            'poznam' => $this->poznam,
            'primUcet' => 'code:013001',
            'sumZklCelkem' => $value,
        ];
        $doklad->takeData($dataPohybu);
        $doklad->insertToAbraFlexi();
        $doklad->unsetDataValue('kod');
        $this->object->sparujPlatbu($doklad);
        $this->assertEquals(
            201,
            $doklad->lastResponseCode,
            _('Invoice match error'),
        );
    }

    /**
     * Crerate testing invoice.
     *
     * @param array $invoiceData
     */
    public function makeInvoice($invoiceData = [])
    {
        if (!isset($invoiceData['kod'])) {
            $invoiceData['kod'] = 'PeeHP'.time();
        }

        if (!isset($invoiceData['varSym'])) {
            $invoiceData['varSym'] = \Ease\Functions::randomNumber(1000, 99999);
        }

        if (!isset($invoiceData['datVyst'])) {
            $invoiceData['datVyst'] = date('Y-m-d', time() - 60 * 60 * 24);
        }

        if (!isset($invoiceData['typDokl'])) {
            $invoiceData['typDokl'] = 'code:FAKTURA';
        }

        if (!isset($invoiceData['zdrojProSkl'])) {
            $invoiceData['zdrojProSkl'] = false;
        }

        if (!isset($invoiceData['dobropisovano'])) {
            $invoiceData['dobropisovano'] = false;
        }

        if (!isset($invoiceData['bezPolozek'])) {
            $invoiceData['bezPolozek'] = false;
        }

        if (!isset($invoiceData['polozky']) && !$invoiceData['bezPolozek']) {
            $invoiceData['bezPolozek'] = true;

            if (!\array_key_exists('sumCelkZakl', $invoiceData)) {
                $scale = 1000 ** 2;
                $price = round(mt_rand(
                    10 * $scale,
                    9000 * $scale,
                ) / $scale, 2);
                //                $invoiceData['sumCelkZakl']  = $invoiceData['castkaMen']    = 0;
                $invoiceData['sumZklCelkem'] = $price;
                $invoiceData['sumCelkem'] = $price;
                $invoiceData['sumOsv'] = $price;
            }
        } else {
            $invoiceData['bezPolozek'] = false;
        }

        if (!isset($invoiceData['firma'])) {
            $adresar = new \AbraFlexi\Adresar();

            $adresy = $adresar->getFlexiData(
                '',
                ['typVztahuK' => 'typVztahu.odberatel'],
            );

            if (\count($adresy)) {
                $dodavatel = $adresy[array_rand($adresy)];

                $invoiceData['firma'] = 'code:'.$dodavatel['kod'];
            } else {
                /**
                 * Make Some Address First ...
                 */
                $address = new \AbraFlexi\Adresar();
                $address->setDataValue('nazev', \Ease\Functions::randomString());
                $address->setDataValue('poznam', 'Generated Unit Test Customer');
                $address->setDataValue('typVztahuK', 'typVztahu.odberatel');
                $address->insertToAbraFlexi();
                $invoiceData['firma'] = $address;
            }
        }

        if (!isset($invoiceData['poznam'])) {
            $invoiceData['poznam'] = $this->poznam;
        }

        $this->object->takeData($invoiceData);
        $this->object->refresh();

        return $this->object;
    }

    /**
     * Provizorní zkopírování faktury.
     *
     * @see https://www.abraflexi.eu/podpora/Tickets/Ticket/View/28848 Chyba při Provádění akcí přes REST API JSON
     *
     * @param \AbraFlexi\FakturaVydana $invoice
     * @param mixed                    $override
     *
     * @return \AbraFlexi\FakturaVydana
     */
    public function invoiceCopy($invoice, $override = [])
    {
        $invoice2 = new \AbraFlexi\FakturaVydana($invoice->getData());
        $invoice2->debug = true;
        $invoice2->unsetDataValue('id');
        $invoice2->unsetDataValue('kod');
        $polozky = $invoice2->getDataValue('polozkyFaktury');

        if (\is_array($polozky) && \count($polozky)) {
            foreach ($polozky as $pid => $polozka) {
                unset($polozky[$pid]['id'], $polozky[$pid]['doklFak'], $polozky[$pid]['doklFak@showAs'], $polozky[$pid]['doklFak@ref']);
            }

            $invoice2->setDataValue('polozkyFaktury', $polozky);
        }

        if (null === $invoice2->getDataValue('typDokl')) {
            $invoice2->setDataValue('typDokl', 'code:FAKTURA');
        }

        $invoice2->unsetDataValue('external-ids');

        $today = date('Y-m-d');

        $invoice2->setDataValue('duzpPuv', $today);
        $invoice2->setDataValue('duzpUcto', $today);
        $invoice2->setDataValue('datUcto', $today);
        $invoice2->takeData($override);
        $invoice2->insertToAbraFlexi();

        return $invoice2;
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::odpocetZDD
     */
    public function testodpocetZDD(): void
    {
        $this->markTestIncomplete('TODO: Write Test');
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::odpocetZalohy
     */
    public function testodpocetZalohy(): void
    {
        $itemName = \Ease\Functions::randomString();

        $polozka = [
            'typCenyDphK' => 'typCeny.bezDph',
            'typSzbDphK' => 'typSzbDph.dphZakl',
            'kopClenKonVykDph' => 'true',
            'typPolozkyK' => 'typPolozky.obecny',
            'zdrojProSkl' => false,
            'zaloha' => true,
            'nazev' => $itemName,
            'szbDph' => 19.0,
            'cenaMj' => 123,
            'mnozMj' => '1.0',
            'poznam' => $this->poznam,
        ];

        $this->makeInvoice(
            [
                'typDokl' => 'code:ZÁLOHA',
                'polozky' => $polozka,
                'bezPolozek' => false,
            ],
        );

        $this->object->hotovostniUhrada($this->object->getDataValue('sumCelkem'));

        $invoice2 = $this->invoiceCopy(
            $this->object,
            ['typDokl' => 'code:FAKTURA'],
        );
        $id = (int) $invoice2->getLastInsertedId();
        $invoice2->loadFromAbraFlexi($id);
        $kod = $invoice2->getDataValue('kod');
        $invoice2->dataReset();
        $invoice2->setDataValue('id', 'code:'.$kod);

        $invdata = $this->object->getData();

        $this->assertArrayHasKey('id', $invdata);

        //        $this->object->getDataValue('sumCelkem'); ????
        //        $result = $invoice2->odpocetZalohy($this->object);
        //        $this->assertArrayHasKey('success', $result);
        //        $this->assertEquals('true', $result['success'], 'Matching Error');
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::addArrayToBranch
     */
    public function testAddArrayToBranch(): void
    {
        $this->object->setDataValue('typDokl', 'FAKTURA');
        $this->object->addArrayToBranch(
            ['nazev' => 'faktura'],
            'polozkyDokladu',
            true,
        );
        $this->object->setDataValue('typDokl', 'ZALOHA');
        $this->object->addArrayToBranch(['nazev' => 'zaloha'], 'polozkyDokladu');
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::vytvorVazbuZDD
     */
    public function testVytvorVazbuZDD(): void
    {
        $vs = \Ease\Functions::randomNumber();
        $this->object->setDataValue('typDokl', 'code:ZÁLOHA');
        $this->object->setDataValue('varSym', $vs);
        $this->object->setDataValue('duzpPuv', '2018-02-10T23:47:10.510+01:00');
        $this->object->refresh();
        $this->object->setDataValue('typDokl', 'code:ZDD');
        $this->object->refresh();
        $income = new \AbraFlexi\Banka();
        $income->setDataValue('typDokl', 'code:STANDARD');
        $income->setDataValue('kod', $vs);
        $income->setDataValue('banka', 'code:BANKOVNÍ ÚČET');
        $income->setDataValue('varSym', $vs);
        $income->refresh();
        $this->object->vytvorVazbuZDD($income);
    }

    /**
     * @covers \AbraFlexi\FakturaVydana::overdueDays
     */
    public function testOverdueDays(): void
    {
        $datSplat = new \DateTime();
        $datSplat->modify('-7 days');
        $datVyst = new \DateTime();
        $datVyst->modify('-14 days');
        $this->assertEquals(0, FakturaVydana::overdueDays(new \DateTime()));
        $this->assertEquals(7, FakturaVydana::overdueDays($datSplat));
        $this->assertEquals(
            14,
            FakturaVydana::overdueDays(\AbraFlexi\RW::dateToFlexiDate($datVyst)),
        );
    }
}
