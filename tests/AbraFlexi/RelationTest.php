<?php

namespace Test\AbraFlexi;

use AbraFlexi\Relation;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:01.
 */
class RelationTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Relation
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Relation();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers AbraFlexi\Relation::__toString
     * @todo   Implement test__toString().
     */
    public function test__toString() {
        $this->assertEquals('', $this->object->__toString());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers AbraFlexi\Relation::getRelationTarget
     * @todo   Implement testgetRelationTarget().
     */
    public function testgetRelationTarget() {
        $this->assertEquals('', $this->object->getRelationTarget());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
