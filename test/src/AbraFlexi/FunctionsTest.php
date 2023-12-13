<?php

declare(strict_types=1);

/**
 * 
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2023 Vitex Software
 */

namespace Test\AbraFlexi;

use AbraFlexi\Functions;
use AbraFlexi\RO;
use DateTime;

/**
 * Description of FunctionsTest
 *
 * @author vitex
 */
class FunctionsTest extends \PHPUnit\Framework\TestCase {
    
    /**
     * @covers AbraFlexi\Functions::evidenceToClassName
     */
    public function testevidenceToClassName() {
        $this->assertEquals('FakturaVydana', Functions::evidenceToClassName('faktura-vydana'));
    }

    /**
     * PHP Date object to AbraFlexi date format test
     * 
     * @covers AbraFlexi\Functions::dateToFlexiDate
     */
    public function testDateToFlexiDate() {
        $dater = new DateTime();
        $this->assertEquals($dater->format(Functions::$DateFormat), Functions::dateToFlexiDate($dater));
    }

    /**
     * PHP Date object to AbraFlexi dateTime format test
     * 
     * @covers AbraFlexi\Functions::dateToFlexiDateTime
     */
    public function testDateToFlexiDateTime() {
        $dater = new DateTime();
        $this->assertEquals($dater->format(Functions::$DateTimeFormat), Functions::dateToFlexiDateTime($dater));
    }
    
}
