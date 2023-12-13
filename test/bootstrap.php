<?php

/**
 * AbraFlexi - nastavení testů.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2015-2023 Spoje.Net
 */
/**
 * Predefined server:One of:
 *
 * official|vitexsoftware|localhost
 */
$testServer = '.env';

include_once file_exists('../vendor/autoload.php') ? '../vendor/autoload.php' : 'vendor/autoload.php';

/**
 * Write logs as:
 */
if (!defined('EASE_APPNAME')) {
    define('EASE_APPNAME', 'AbraFlexiTest');
}
if (!defined('EASE_LOGGER')) {
    define('EASE_LOGGER', 'syslog');
}

if (\Ease\Shared::init(['ABRAFLEXI_URL', 'ABRAFLEXI_LOGIN', 'ABRAFLEXI_PASSWORD', 'ABRAFLEXI_COMPANY'], '../.env')) { //FallBack to Abra
    /*
     * URL AbraFlexi API
     */
    define('ABRAFLEXI_URL', 'https://demo.flexibee.eu');
    /*
     * Uživatel AbraFlexi API
     */
    define('ABRAFLEXI_LOGIN', 'winstrom');
    /*
     * Heslo AbraFlexi API
     */
    define('ABRAFLEXI_PASSWORD', 'winstrom');
    /*
     * Společnost v AbraFlexi
     */
    define('ABRAFLEXI_COMPANY', 'demo');
}

$adresser = new AbraFlexi\Adresar('code:TEST', ['ignore404' => true]);
if ($adresser->lastResponseCode == 404) {
    $addressTester = \Test\AbraFlexi\AdresarTest::makeTestAddress(['kod' => 'TEST', 'email' => 'main@test.cz']);
    \Test\AbraFlexi\KontaktTest::makeTestContact(['firma' => $addressTester, 'email' => 'fakturace@test.cz', 'jmeno' => 'fakturant', 'prijmeni' => 'Novak', 'odesilatFak' => true]);
    \Test\AbraFlexi\KontaktTest::makeTestContact(['firma' => $addressTester, 'email' => 'kancelar@test.cz', 'jmeno' => 'Obchodnik', 'prijmeni' => 'Novy', 'odesilatFak' => true, 'odesilatPpt' => true]);
}
$invoicer = new AbraFlexi\Adresar('code:TEST', ['ignore404' => true]);
if ($invoicer->lastResponseCode == 404) {
    \Test\AbraFlexi\FakturaVydana::makeTestInvoice('code:TEST', ['ignore404' => true]);
}
