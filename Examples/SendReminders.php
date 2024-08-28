#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$invoicer = new \AbraFlexi\FakturaVydana();

function getOverdueInvoices($invoicer)
{
    $result = null;
    $invoicer->defaultUrlParams['order'] = 'datVyst@A';
    $invoicer->defaultUrlParams['relations'] = 'adresar,kontakt';
    $invoices = $invoicer->getColumnsFromFlexibee(
        [
            'id',
            'kod',
            'stavUhrK',
            'firma',
            'buc',
            'varSym',
            'specSym',
            'sumCelkem',
            'duzpPuv',
            'datVyst'],
        "(stavUhrK is null OR stavUhrK eq 'stavUhr.castUhr') AND storno eq false",
        'id',
    );

    if ($invoicer->lastResponseCode === 200) {
        $result = $invoices;
    }

    return $result;
}
$firmer = new \AbraFlexi\Adresar();

foreach (getOverdueInvoices($invoicer) as $invoice) {
    $invoicer->setData($invoice, true);

    $firmer->setMyKey($invoicer->getDataValue('firma'));

    $mail = new \Ease\Mailer(
        $firmer->getNotificationEmailAddress(),
        sprintf(_('Overdue invoice: %s'), $invoice['kod']),
        sprintf(_('Please pay %s,-'), $invoice['sumCelkem']),
    );

    $mail->addFile(
        $invoicer->downloadInFormat('pdf', '/tmp/'),
        \AbraFlexi\Formats::$formats['PDF']['content-type'],
    );
    $mail->addFile(
        $invoicer->downloadInFormat('isdocx', '/tmp/'),
        \AbraFlexi\Formats::$formats['ISDOCx']['content-type'],
    );

    $mail->send();
}
