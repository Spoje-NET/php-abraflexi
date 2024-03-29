<?php

/**
 * AbraFlexi - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace Test\AbraFlexi;

use AbraFlexi\Adresar;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-27 at 17:54:36.
 */
class AdresarTest extends RWTest {

    /**
     * @var Adresar
     */
    protected $object;

    /**
     * Prepare Addresbook entry
     * 
     * @param array $initialData
     * 
     * @return \AbraFlexi\Adresar
     */
    public static function makeTestAddress($initialData = []) {
        $testCode = 'TEST_' . time();
        $address = new \AbraFlexi\Adresar();
        $address->takeData(array_merge([
            'kod' => $testCode,
            'nazev' => 'TESTer ' . time(),
            'poznam' => 'AbraFlexi Test Address',
                        ], $initialData));
        if ($address->sync()) {
            $address->addStatusMessage($address->getApiURL() . ' ' .\AbraFlexi\RO::uncode($address->getRecordIdent().' '.$address->getDataValue('mail')) ,'success');
        } else {
            $address->addStatusMessage(json_encode($address->getData()), 'debug');
        }

        return $address;
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Adresar();
    }

    /**
     * @covers AbraFlexi\Adresar::getNotificationEmailAddress
     */
    public function testGetNotificationEmailAddress() {
        $this->object->setMyKey('code:TEST');
        $this->assertEquals('main@test.cz',$this->object->getNotificationEmailAddress());
        $this->assertEquals('fakturace@test.cz,kancelar@test.cz',$this->object->getNotificationEmailAddress('Fak'));
        $this->assertEquals('kancelar@test.cz',$this->object->getNotificationEmailAddress('Ppt'));
    }

    /**
     * @covers AbraFlexi\Adresar::getCellPhoneNumber
     */
    public function testGetCellPhoneNumber() {
        $this->object->getCellPhoneNumber();
    }

    /**
     * @covers AbraFlexi\Adresar::getAnyPhoneNumber
     */
    public function testGetAnyPhoneNumber() {
        $this->object->getAnyPhoneNumber();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }
}
