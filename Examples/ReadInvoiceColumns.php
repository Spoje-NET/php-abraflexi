#!/usr/bin/php -f
<?php

/**
 * AbraFlexi - Example how to read Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017-2021 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoice = new \AbraFlexi\FakturaVydana();
$invoices = $invoice->getColumnsFromAbraFlexi(['id', 'firma', 'lastUpdate', 'datVyst', 'datSplat'], ['limit'=>100,'start'=>20], 'datVyst');

if ($invoices) {
    if ($invoice->lastResponseCode == 200) {
        echo $invoice->getApiURL();
        print_r($invoices);
    }
} else {
    $invoice->addStatusMessage('No Invoices found');
}
