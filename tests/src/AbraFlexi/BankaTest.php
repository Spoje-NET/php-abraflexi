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

use AbraFlexi\Banka;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-06-10 at 12:31:59.
 */
class BankaTest extends RWTest
{
    protected Banka $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Banka();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * Prepare testing payment.
     *
     * @param array $initialData
     * @param mixed $dayBack
     *
     * @return \AbraFlexi\Banka
     */
    public static function makeTestPayment($initialData = [], $dayBack = 1)
    {
        $yesterday = new \DateTime();
        $yesterday->modify('-'.$dayBack.' day');

        $testCode = 'PAY_'.\Ease\Functions::randomString();

        $payment = new \AbraFlexi\Banka($initialData);

        $payment->takeData(array_merge([
            'kod' => $testCode,
            'banka' => 'code:HLAVNI',
            'typPohybuK' => 'typPohybu.prijem',
            'popis' => 'AbraFlexi Test bank record',
            'varSym' => \Ease\Functions::randomNumber(1111, 9999),
            'specSym' => \Ease\Functions::randomNumber(111, 999),
            'bezPolozek' => true,
            'datVyst' => \AbraFlexi\RO::dateToFlexiDate($yesterday),
            'typDokl' => \AbraFlexi\RO::code('STANDARD'),
        ], $initialData));

        if ($payment->sync()) {
            $payment->addStatusMessage(
                $payment->getApiURL().' '.\AbraFlexi\Functions::uncode((string)$payment->getDataValue('typPohybuK')).' '.\AbraFlexi\Functions::uncode((string)$payment->getRecordIdent()).' '.\AbraFlexi\Functions::uncode((string)$payment->getDataValue('sumCelkem')).' '.\AbraFlexi\Functions::uncode((string)$payment->getDataValue('mena')),
                'success',
            );
        } else {
            $payment->addStatusMessage(json_encode($payment->getData()), 'debug');
        }

        return $payment;
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
        $loader = new \AbraFlexi\RO(
            null,
            ['evidence' => 'bankovni-ucet'],
        );
        $bankCodeRaw = $loader->getColumnsFromAbraFlexi([
            'kod'], ['limit' => 1]);
        $dataForInsert['banka'] = \AbraFlexi\RO::code($bankCodeRaw[0]['kod']);
        $dataForInsert['typPohybuK'] = 'typPohybu.prijem';

        return $dataForInsert;
    }

    /**
     * @covers \AbraFlexi\Banka::stahnoutVypisyOnline
     */
    public function testStahnoutVypisyOnline(): void
    {
        $this->assertIsBool(
            $this->object->stahnoutVypisyOnline(),
        );
    }

    /**
     * @covers \AbraFlexi\Banka::automatickeParovani
     */
    public function testAutomatickeParovani(): void
    {
        $this->assertIsBool(
            $this->object->automatickeParovani(),
        );
    }
}
