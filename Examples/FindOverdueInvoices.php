#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

/**
 * Get Number of days overdue.
 *
 * @param string $dueDate FlexiBee date
 *
 * @return int
 */
function poSplatnosti($dueDate)
{
    return (int) date_diff(
        \AbraFlexi\RO::flexiDateToDateTime($dueDate),
        new \DateTime(),
    )->format('%a');
}

/**
 * Vrať faktury po splatnosti.
 *
 * @param \AbraFlexi\FakturaVydana $invoicer
 *
 * @return array
 */
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
            'datSplat',
            'datVyst'],
        "(stavUhrK is null OR stavUhrK eq 'stavUhr.castUhr') AND storno eq false",
        'id',
    );

    if ($invoicer->lastResponseCode === 200) {
        $result = $invoices;
    }

    return $result;
}
$statuser = new \AbraFlexi\Status();
$invoicer = new \AbraFlexi\FakturaVydana();
$firmer = new \AbraFlexi\Adresar();

foreach (getOverdueInvoices($invoicer) as $invoice) {
    $kontakt = $firmer->getColumnsFromFlexibee(
        ['nazev', 'email'],
        ['id' => $invoice['firma']],
    );

    if (isset($kontakt[0]['email'])) {
        $invoicer->setMyKey($invoice['id']);

        $to = $kontakt[0]['email'];
        $subject = sprintf(
            _('Overdue invoice: %s - %s days'),
            $invoice['kod'],
            poSplatnosti($invoice['datSplat']),
        );
        $body = sprintf(_('Please pay %s,-'), $invoice['sumCelkem']);

        if ($statuser->getDataValue('licenseVariant') === 'basic') {
            $mail = new \Ease\Mailer($to, $subject, $body);
            $mail->addFile($invoicer->downloadInFormat('pdf', '/tmp/'));
            $mail->addFile($invoicer->downloadInFormat('isdoc', '/tmp/'));
            $mail->send();
        } else {
            if ($invoicer->sendByMail($to, $subject, $body)) {
                $invoicer->addStatusMessage(spritnf(
                    _('Message sent: %s to %s'),
                    $subject,
                    $to,
                ), 'mail');
            }
        }
    }
}
