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

$companer = new \AbraFlexi\Company();
$companies = $companer->getFlexiData();

if (\array_key_exists('company', $companies) === true) {
    $companer->addStatusMessage('Connection OK', 'success');
} else {
    $companer->addStatusMessage('Connection failed', 'warning');
}
