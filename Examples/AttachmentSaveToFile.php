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

include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);

$attachment = \AbraFlexi\Priloha::getFirstAttachment($invoice);

if (isset($attachment['id'])) {
    if (\AbraFlexi\Priloha::saveToFile((int) $attachment['id'], '/tmp/')) {
        $invoice->addStatusMessage(sprintf(
            _('Attachment %s was saved'),
            $attachment['nazSoub'],
        ), 'success');
    }
} else {
    $invoice->addStatusMessage(_('Invoice without attachment'));
}
