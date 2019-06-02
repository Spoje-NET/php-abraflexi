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

/**
 * Copy an invoice to new one
 *
 * @param \FlexiPeeHP\FakturaVydana $invoice
 * @param array                     $extraValues Extra values for invoice Copy
 *
 * @return \FlexiPeeHP\FakturaVydana
 */
function invoiceCopy(\FlexiPeeHP\FakturaVydana $invoice, $extraValues = [])
{
    $invoice2 = new \FlexiPeeHP\FakturaVydana(array_merge(
            $extraValues, $invoice->getData()));
    $invoice2->unsetDataValue('id');
    $invoice2->unsetDataValue('kod');
    if ($invoice2->getDataValue('stavUhrK') != 'stavUhr.uhrazenoRucne') {
        $invoice2->unsetDataValue('stavUhrK');
    }
    $invoiceItems = $invoice2->getDataValue('polozkyFaktury');
    if (count($invoiceItems)) {
        foreach ($invoiceItems as $pid => $invoiceItem) {
            unset($invoiceItems[$pid]['id']);
            unset($invoiceItems[$pid]['doklFak']);
            unset($invoiceItems[$pid]['doklFak@showAs']);
            unset($invoiceItems[$pid]['doklFak@ref']);
        }
        $invoice2->setDataValue('polozkyFaktury', $invoiceItems);

//   $invoice2->addArrayToBranch($invoiceItems, 'polozkyFaktury');
    }
    $invoice2->setDataValue('typDokl', 'code:FAKTURA');

    $invoice2->unsetDataValue('external-ids');

    $today = date('Y-m-d');

    $invoice2->setDataValue('duzpPuv', $today);
    $invoice2->setDataValue('duzpUcto', $today);
    $invoice2->setDataValue('datUcto', $today);
    $invoice2->insertToFlexiBee();
    if ($invoice2->lastResponseCode == 201) {
        $invoice->addStatusMessage(sprintf(_('Invoice copy from %s to id:%s done'),
                (string) $invoice, (string) $invoice2), 'success');
    }
    return $invoice2;
}
include_once './common.php';

$invoiceID = askForFlexiBeeID();

/*
 * FlexiPeeHP Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$originalInvoice = new \FlexiPeeHP\FakturaVydana($invoiceID);
if ($originalInvoice->getMyKey()) {
    $invoiceCopy = invoiceCopy($originalInvoice,
        ['poznam' => 'FlexiPeeHP php library example - this is copy of '.$invoiceID]);

    if ($invoiceCopy->lastResponseCode == 201) {
        echo $invoiceCopy->getEvidenceURL().'/'.(string) $invoiceCopy;
    }
} else {
    $originalInvoice->addStatusMessage('Source Invoice does not exists');
}
