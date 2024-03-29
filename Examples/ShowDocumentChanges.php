#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to copy Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

$invoiceID = askForFlexiBeeID();

/*
 * AbraFlexi Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);
if ($invoice->getMyKey()) {
    print_r($invoice->getChanges());
} else {
    $originalInvoice->addStatusMessage('Source Invoice does not exists');
}
