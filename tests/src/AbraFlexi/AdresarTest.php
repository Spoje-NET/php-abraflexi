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

use AbraFlexi\Adresar;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-27 at 17:54:36.
 */
class AdresarTest extends RWTest
{
    protected Adresar $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Adresar();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * Prepare Addresbook entry.
     *
     * @param array $initialData
     *
     * @return \AbraFlexi\Adresar
     */
    public static function makeTestAddress($initialData = [])
    {
        $testCode = 'TEST_'.time();
        $address = new \AbraFlexi\Adresar();
        $address->takeData(array_merge([
            'kod' => $testCode,
            'nazev' => 'TESTer '.time(),
            'poznam' => 'AbraFlexi Test Address',
        ], $initialData));

        if ($address->sync()) {
            $address->addStatusMessage($address->getApiURL().' '.\AbraFlexi\Functions::uncode((string) $address->getRecordIdent().' '.$address->getDataValue('mail')), 'success');
        } else {
            $address->addStatusMessage(json_encode($address->getData()), 'debug');
        }

        return $address;
    }

    /**
     * @covers \AbraFlexi\Adresar::getNotificationEmailAddress
     */
    public function testGetNotificationEmailAddress(): void
    {
        $this->object->setMyKey('code:TEST');
        $this->assertEquals('main@test.cz', $this->object->getNotificationEmailAddress());
        $this->assertEquals('fakturace@test.cz,kancelar@test.cz', $this->object->getNotificationEmailAddress('Fak'));
        $this->assertEquals('kancelar@test.cz', $this->object->getNotificationEmailAddress('Ppt'));
    }

    /**
     * @covers \AbraFlexi\Adresar::getCellPhoneNumber
     */
    public function testGetCellPhoneNumber(): void
    {
        $this->object->getCellPhoneNumber();
    }

    /**
     * @covers \AbraFlexi\Adresar::getAnyPhoneNumber
     */
    public function testGetAnyPhoneNumber(): void
    {
        $this->object->getAnyPhoneNumber();
    }
}
