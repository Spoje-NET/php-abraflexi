#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025-2026 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

include_once './common.php';

$bankAccountID = askForFlexiBeeID('bank account');

$bankAccount = new \AbraFlexi\BankovniUcet($bankAccountID);

if ($bankAccount->getMyKey()) {
    if ($bankAccount->nacistVypisZeSouboru('./vypis.abo')) {
        $bankAccount->addStatusMessage('Bank statement loaded into '.$bankAccount->getApiURL(), 'success');
    } else {
        $bankAccount->addStatusMessage('Bank statement load into '.$bankAccount->getApiURL().' failed', 'error');
    }
} else {
    $bankAccount->addStatusMessage('Bank account does not exists in '.$bankAccount->getApiURL());
}
