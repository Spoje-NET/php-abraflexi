#!/usr/bin/php -f
<?php

/**
 * AbraFlexi - Document Storno Example 
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018-2021 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \AbraFlexi\FakturaVydana($invoiceID, ['ignore404' => true]);
if ($invoice->lastResponseCode) {
    $invoice->performAction('storno', 'int');
} else {
    echo 'No such invoice';
}

