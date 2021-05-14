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

$adreser   = new \AbraFlexi\Adresar();
$addresses = $adreser->getColumnsFromFlexibee(['id', 'nazev', 'email','kontakty'],
    ['typVztahuK' => 'typVztahu.odberatel'], 'nazev');

print_r($addresses);