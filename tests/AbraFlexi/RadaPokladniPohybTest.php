<?php

namespace Test\AbraFlexi;

use AbraFlexi\RadaPokladniPohyb;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:08.
 */
class RadaPokladniPohybTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var RadaPokladniPohyb
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new RadaPokladniPohyb();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers AbraFlexi\RadaPokladniPohyb::getNextRecordCode
     * @todo   Implement testgetNextRecordCode().
     */
    public function testgetNextRecordCode() {
        $this->assertEquals('', $this->object->getNextRecordCode());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers AbraFlexi\RadaPokladniPohyb::incrementNextRecordCode
     * @todo   Implement testincrementNextRecordCode().
     */
    public function testincrementNextRecordCode() {
        $this->assertEquals('', $this->object->incrementNextRecordCode());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
