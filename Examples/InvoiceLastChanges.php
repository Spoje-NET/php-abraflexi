#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to copy Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

$invoiceID = askForFlexiBeeID();

/*
 * FlexiPeeHP Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$invoice = new \FlexiPeeHP\FakturaVydana($invoiceID);
if ($invoice->getMyKey()) {
    $journaler = new \FlexiPeeHP\Zurnal();
    $changes   = $journaler->getLastChange($invoice);
} else {
    $invoice->addStatusMessage('Source Invoice does not exists');
}
