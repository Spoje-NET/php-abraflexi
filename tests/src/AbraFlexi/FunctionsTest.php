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

use AbraFlexi\Functions;
use DateTime;

/**
 * Description of FunctionsTest.
 *
 * @author vitex
 */
class FunctionsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \AbraFlexi\Functions::evidenceToClassName
     */
    public function testevidenceToClassName(): void
    {
        $this->assertEquals('FakturaVydana', Functions::evidenceToClassName('faktura-vydana'));
    }

    /**
     * PHP Date object to AbraFlexi date format test.
     *
     * @covers \AbraFlexi\Functions::dateToFlexiDate
     */
    public function testDateToFlexiDate(): void
    {
        $dater = new \DateTime();
        $this->assertEquals($dater->format(Functions::$DateFormat), Functions::dateToFlexiDate($dater));
    }

    /**
     * PHP Date object to AbraFlexi dateTime format test.
     *
     * @covers \AbraFlexi\Functions::dateToFlexiDateTime
     */
    public function testDateToFlexiDateTime(): void
    {
        $dater = new \DateTime();
        $this->assertEquals($dater->format(Functions::$DateTimeFormat), Functions::dateToFlexiDateTime($dater));
    }
}
