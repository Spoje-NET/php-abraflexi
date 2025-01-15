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

/**
 * Instance of AbraFlexi Invoice in dry-run mode with random code.
 */
$invoice = new \AbraFlexi\FakturaVydana([
    'kod' => 'DRY_RUN_TEST',
    'typDokl' => 'code:FAKTURA',
    'poznam' => 'Test '.time(),
    'varSym' => time()], ['dry-run' => true]);

/**
 * Save invoice to AbraFlexi.
 */
try {
    $resultInsert = $invoice->insertToAbraFlexi();
} catch (\AbraFlexi\Exception $exc) {
    echo $exc->getMessage();
    // For example we can get here: "AbraFlexi\FakturaVydana: Pole 'Variabilní symbol' musí být vyplněno. [DRY_RUN_TEST]"
}

/**
 * Save to AbraFlexi and load result.
 */
$resultSync = $invoice->sync();

echo $resultSync ? 'OK' : 'Failed';
