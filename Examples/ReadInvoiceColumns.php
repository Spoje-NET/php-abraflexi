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

$invoice = new \AbraFlexi\FakturaVydana();
$invoices = $invoice->getColumnsFromAbraFlexi(['id', 'firma', 'lastUpdate', 'datVyst', 'datSplat'], ['limit' => 100, 'start' => 20], 'datVyst');

if ($invoices) {
    if ($invoice->lastResponseCode === 200) {
        echo $invoice->getApiURL();
        print_r($invoices);
    }
} else {
    $invoice->addStatusMessage('No Invoices found');
}
