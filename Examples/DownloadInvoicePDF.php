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

$invoice = new \AbraFlexi\FakturaVydana($invoiceID, ['detail' => 'id']);
echo 'invoice saved to: '.$invoice->downloadInFormat(
    'pdf',
    '/tmp/',
    'fakturaKB$$SUM_BEZ_QR',
)."\n";

echo 'post money order saved to: '.$invoice->downloadInFormat($format, '/tmp/', 'slozenkaA$$SUM')."\n";
