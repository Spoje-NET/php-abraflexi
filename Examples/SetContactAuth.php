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

$kontakter = new \AbraFlexi\Kontakt();
$first = $kontakter->getColumnsFromFlexibee(['id'], ['limit' => 1]);
$kontakter->setData([
    'id' => $first[0]['id'],
    'username' => 'login',
    'password' => 'heslo',
    //    'password@hash' => 'sha256',
    //    'password@salt' => 'osoleno',
    'email' => 'example@flexibee.eu',
    'poznam' => 'auth']);

$kontakter->insertToFlexiBee();

if ($kontakter->lastResponseCode === 201) {
    $kontakter->addStatusMessage('Password set', 'success');
    $kontakter->loadFromAbraFlexi();
} else {
    $kontakter->addStatusMessage('Password set failed', 'warning');
}
