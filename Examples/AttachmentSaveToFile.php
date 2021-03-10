#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to download Attachment
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

$attachment = \AbraFlexi\Priloha::getFirstAttachment($invoice);

if (isset($attachment['id'])) {
    if (\AbraFlexi\Priloha::saveToFile((int) $attachment['id'], '/tmp/')) {
        $invoice->addStatusMessage(sprintf(_('Attachment %s was saved'),
                $attachment['nazSoub']), 'success');
    }
} else {
    $invoice->addStatusMessage(_('Invoice without attachment'));
}
