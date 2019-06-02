#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to download Attachment
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

$attachment = \FlexiPeeHP\Priloha::getFirstAttachment($invoice);

if (isset($attachment['id'])) {
    if (\FlexiPeeHP\Priloha::saveToFile((int) $attachment['id'], '/tmp/')) {
        $invoice->addStatusMessage(sprintf(_('Attachment %s was saved'),
                $attachment['nazSoub']), 'success');
    }
} else {
    $invoice->addStatusMessage(_('Invoice without attachment'));
}
