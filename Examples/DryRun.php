#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to dry-run request
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018-2023 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';

/**
 * Instance of AbraFlexi Invoice in dry-run mode with random code
 */

$invoice = new \AbraFlexi\FakturaVydana([
    'kod'=>'DRY_RUN_TEST', 
    'typDokl' => 'code:FAKTURA',
    'poznam' => 'Test ' . time(), 
    'varSym' => time()], ['dry-run' => true]);

/**
 * Save invoice to AbraFlexi
 */
 try {
     $resultInsert = $invoice->insertToAbraFlexi();
 } catch (\AbraFlexi\Exception $exc) {
     echo $exc->getMessage();
    //For example we can get here: "AbraFlexi\FakturaVydana: Pole 'Variabilní symbol' musí být vyplněno. [DRY_RUN_TEST]"
 }

/**
 * Save to AbraFlexi and load result
 */
$resultSync = $invoice->sync();

echo $resultSync ? 'OK' : 'Failed';
