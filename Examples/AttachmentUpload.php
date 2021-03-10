#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to upload Attachment
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);

$result = \AbraFlexi\Priloha::addAttachmentFromFile($invoice,
        '../flexipeehp.png');
if ($result == 201) {
    $allAttachments = \AbraFlexi\Priloha::getAttachmentsList($invoice);
    $lastAttachment = end($allAttachments);
    $invoice->addStatusMessage('Attachment '.$invoice->getFlexiBeeURL().'/prilohy/'.$lastAttachment['id'].'/content OK',
        'success');
} else {
    $invoice->addStatusMessage('Attachment '.$invoice->getFlexiBeeURL().' Failed',
        'error');
}

