#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to upload Attachment
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \FlexiPeeHP\FakturaVydana($invoiceID);

$result = \FlexiPeeHP\Priloha::addAttachmentFromFile($invoice,
        '../flexipeehp.png');
if ($result == 201) {
    $allAttachments = \FlexiPeeHP\Priloha::getAttachmentsList($invoice);
    $lastAttachment = end($allAttachments);
    $invoice->addStatusMessage('Attachment '.$invoice->getFlexiBeeURL().'/prilohy/'.$lastAttachment['id'].'/content OK',
        'success');
} else {
    $invoice->addStatusMessage('Attachment '.$invoice->getFlexiBeeURL().' Failed',
        'error');
}

