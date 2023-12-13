<?php

declare(strict_types=1);

/**
 * 
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2023 Vitex Software
 */

namespace Test\AbraFlexi;

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
        $this->assertEquals('FakturaVydana', \AbraFlexi\Functions::evidenceToClassName('faktura-vydana'));
    }

}
