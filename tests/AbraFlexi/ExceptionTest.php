<?php

namespace Test\AbraFlexi;

use AbraFlexi\Exception;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:41.
 */
class ExceptionTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Exception
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Exception();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers AbraFlexi\Exception::getErrorMessage
     * @todo   Implement testgetErrorMessage().
     */
    public function testgetErrorMessage() {
        $this->assertEquals('', $this->object->getErrorMessage());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers AbraFlexi\Exception::getErrorMessages
     * @todo   Implement testgetErrorMessages().
     */
    public function testgetErrorMessages() {
        $this->assertEquals('', $this->object->getErrorMessages());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers AbraFlexi\Exception::getServerResponse
     * @todo   Implement testgetServerResponse().
     */
    public function testgetServerResponse() {
        $this->assertEquals('', $this->object->getServerResponse());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
