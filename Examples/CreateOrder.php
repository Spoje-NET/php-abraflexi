#!/usr/bin/php -f
<?php

/**
 * AbraFlexi - Example how to copy Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2022 Vitex Software
 */

namespace Example\AbraFlexi;

use AbraFlexi\Exception;
use AbraFlexi\ObjednavkaPrijata;

define('EASE_LOGGER', 'console');

include_once './config.php';
include_once '../vendor/autoload.php';

$orderer = new ObjednavkaPrijata('code:OBJ:' . time(), ['autoload' => false]);
$orderer->setDataValue('typDokl', 'code:OBP'); //Choose one from https://demo.flexibee.eu/c/demo/typ-objednavky-prijate
try {
    if ($orderer->sync() == true) {
        print_r($orderer->getData());
        $orderer->addStatusMessage($orderer->getRecordIdent(), 'success');
    }
} catch (Exception $exc) {
    $orderer->addStatusMessage($exc->getMessage(), 'error');
    echo $exc->getTraceAsString();
}




