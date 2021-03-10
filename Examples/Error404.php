#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to read columns
 *
 *              Z evidence Adresáře odběratelů vytáhni 3 sloupečky
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

$banker = new \AbraFlexi\Banka();
$first  = $banker->getColumnsFromFlexibee(['id'], ['limit' => 1]);


$banker->ignore404(true);
$response404 = $banker->performRequest('error.json');
$banker->ignore404(fals);

$response200X = $banker->performRequest('/banka/'.$first[0]['id']);
