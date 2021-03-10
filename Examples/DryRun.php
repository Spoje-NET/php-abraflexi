#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to dry-run request
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';


$invoice = new \AbraFlexi\FakturaVydana();

$invoice->defaultUrlParams['dry-run'] = 'true';

$resultHere = $invoice->insertToFlexiBee(['typDokl' => 'code:FAKTURA']);

echo json_encode($resultHere, JSON_PRETTY_PRINT);;
