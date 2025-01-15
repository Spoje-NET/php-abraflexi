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
 * @var \AbraFlexi\FakturaVydana With initial type code:FAKTURA, connected to
 *                               default constatnt('FLEXIBEE_URL')
 */
$originalInvoice = new \AbraFlexi\FakturaVydana(['typDokl' => \AbraFlexi\RO::code('FAKTURA')]);

/**
 * @var \AbraFlexi\FakturaVydana
 */
$invoice = new \AbraFlexi\FakturaVydana(
    $originalInvoice->getData(),
    $originalInvoice->getConnectionOptions(),
);

/**
 * Save to FlexiBee a obtain processed record record with its new CODE, Number etc.
 */
$invoice->sync();

/**
 * Print Link to new record in FlexiBee web interface.
 */
echo '<a href="'.$invoice->getApiURL('html').'">'.$invoice.'</a>';
