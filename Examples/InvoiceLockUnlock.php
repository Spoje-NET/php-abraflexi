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
$id = $invoice->getMyKey();
$zamekK = $invoice->getDataValue('zamekK');
$kod = $invoice->getDataValue('kod');

if ($id) {
    $invoice->dataReset(); // Do not send back all data
    $invoice->setMyKey($id);
    $invoice->setDataValue('kod', $kod);

    switch ($zamekK) {
        case 'zamek.zamceno':
            $result = $invoice->performAction('unlock', 'int');

            break;
        case 'zamek.otevreno':
            $result = $invoice->performAction('lock', 'int');

            break;
    }

    if ($result['success'] === 'true') {
        $invoice->addStatusMessage(sprintf(
            _('Invoice %s lock switched'),
            $invoice,
        ), 'success');
    } else {
        $invoice->addStatusMessage(sprintf(
            _('Invoice %s lock switch failed'),
            $invoice,
        ), 'error');
    }
} else {
    $invoice->addStatusMessage(
        'Invoice '.$invoiceID.' does not exists',
        'warning',
    );
}
