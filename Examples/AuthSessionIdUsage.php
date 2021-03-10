#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how use AuthSessionID
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

define('FLEXIBEE_AUTHSESSID',
    '00112233445566778899aabbccddeeff00112233445566778899aabbccddeeff');

$invoice = new \AbraFlexi\FakturaVydana();
$invoice->setDataValue('typDokl', 'FAKTURA');
$invoice->insertToFlexiBee();

