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

use AbraFlexi\Date;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:33.
 */
class DateTest extends \PHPUnit\Framework\TestCase
{
    protected Date $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Date();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \AbraFlexi\Date::__toString
     */
    public function testToString(): void
    {
        $this->assertEquals(date('Y-m-d'), $this->object->__toString());
    }
}
