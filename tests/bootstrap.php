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

include_once file_exists('../vendor/autoload.php') ? '../vendor/autoload.php' : 'vendor/autoload.php';

/**
 * Write logs as:
 */
if (!\defined('EASE_APPNAME')) {
    \define('EASE_APPNAME', 'AbraFlexiTest');
}

if (!\defined('EASE_LOGGER')) {
    \define('EASE_LOGGER', 'syslog');
}

if (\Ease\Shared::init(['ABRAFLEXI_URL', 'ABRAFLEXI_LOGIN', 'ABRAFLEXI_PASSWORD', 'ABRAFLEXI_COMPANY'], file_exists('../.env') ? '../.env' : '.env', false) === false) { // FallBack to Abra
    /*
     * URL AbraFlexi API
     */
    \define('ABRAFLEXI_URL', 'https://demo.flexibee.eu');
    /*
     * Uživatel AbraFlexi API
     */
    \define('ABRAFLEXI_LOGIN', 'winstrom');
    /*
     * Heslo AbraFlexi API
     */
    \define('ABRAFLEXI_PASSWORD', 'winstrom');
    /*
     * Společnost v AbraFlexi
     */
    \define('ABRAFLEXI_COMPANY', 'demo');
}

$adresser = new AbraFlexi\Adresar('code:TEST', ['ignore404' => true]);

if ($adresser->lastResponseCode === 404) {
    $addressTester = \Test\AbraFlexi\AdresarTest::makeTestAddress(['kod' => 'TEST', 'email' => 'main@test.cz']);
    \Test\AbraFlexi\KontaktTest::makeTestContact(['firma' => $addressTester, 'email' => 'fakturace@test.cz', 'jmeno' => 'fakturant', 'prijmeni' => 'Novak', 'odesilatFak' => true]);
    \Test\AbraFlexi\KontaktTest::makeTestContact(['firma' => $addressTester, 'email' => 'kancelar@test.cz', 'jmeno' => 'Obchodnik', 'prijmeni' => 'Novy', 'odesilatFak' => true, 'odesilatPpt' => true]);
}

$invoicer = new AbraFlexi\Adresar('code:TEST', ['ignore404' => true]);

if ($invoicer->lastResponseCode === 404) {
    \Test\AbraFlexi\FakturaVydana::makeTestInvoice('code:TEST', ['ignore404' => true]);
}
