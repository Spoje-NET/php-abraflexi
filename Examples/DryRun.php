#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to dry-run request
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';


$invoice = new \FlexiPeeHP\FakturaVydana();

$invoice->defaultUrlParams['dry-run'] = 'true';

$resultHere = $invoice->insertToFlexiBee(['typDokl' => 'code:FAKTURA']);

echo json_encode($resultHere, JSON_PRETTY_PRINT);;
