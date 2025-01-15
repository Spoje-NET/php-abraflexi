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

use AbraFlexi\FakturaVydana;

\define('EASE_LOGGER', 'syslog|console');

include_once './config.php';

include_once '../vendor/autoload.php';

$invoiceId = 1;

$inv = new FakturaVydana($invoiceId, ['autoload' => false]);
$inv->takeData(['stavMailK' => 'stavMail.odeslano']);
$inv->sync();

$inv->addStatusMessage(
    _('Invoice').': '.$inv->getRecordIdent().' '.$inv->getRecordCode(),
    $inv->sync() ? 'success' : 'error',
);
