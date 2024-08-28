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

include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);

$result = \AbraFlexi\Priloha::addAttachmentFromFile($invoice, '../project-logo.png');

if ($result->lastResponseCode === 201) {
    $allAttachments = \AbraFlexi\Priloha::getAttachmentsList($invoice);
    $lastAttachment = end($allAttachments);
    $invoice->addStatusMessage(
        'Attachment '.$invoice->getAbraFlexiURL().'/prilohy/'.$lastAttachment['id'].'/content OK',
        'success',
    );
} else {
    $invoice->addStatusMessage(
        'Attachment '.$invoice->getAbraFlexiURL().' Failed',
        'error',
    );
}
