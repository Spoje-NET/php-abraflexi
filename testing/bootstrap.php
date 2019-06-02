<?php
/**
 * FlexiPeeHP - nastavení testů.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2015 Spoje.Net
 */

/**
 * Predefined server:One of:
 *
 * official|vitexsoftware|localhost
 */
$testServer = 'vitexsoftware';

if (file_exists('../vendor/autoload.php')) {
    include_once '../vendor/autoload.php';
} else {
    if (file_exists('vendor/autoload.php')) { //For Test Generator
        include_once 'vendor/autoload.php';
    }
}
/**
 * Write logs as:
 */
if (!defined('EASE_APPNAME')) {
    define('EASE_APPNAME', 'FlexiPeeHPtest');
}
if (!defined('EASE_LOGGER')) {
    define('EASE_LOGGER', 'syslog');
}


switch ($testServer) {
    case 'official':
////
//// Config for official test server
////

        /*
         * URL Flexibee API
         */
        define('FLEXIBEE_URL', 'https://demo.flexibee.eu');
        /*
         * Uživatel FlexiBee API
         */
        define('FLEXIBEE_LOGIN', 'winstrom');
        /*
         * Heslo FlexiBee API
         */
        define('FLEXIBEE_PASSWORD', 'winstrom');
        /*
         * Společnost v FlexiBee
         */
        define('FLEXIBEE_COMPANY', 'demo');


        break;
    case 'vitexsoftware':
//
// Config for Spoje.Net
//

        /*
         * URL Flexibee API
         */
        define('FLEXIBEE_URL', 'https://vitexsoftware.flexibee.eu:5434');
        /*
         * Uživatel FlexiBee API
         */
        define('FLEXIBEE_LOGIN', 'flexipeehp');
        /*
         * Heslo FlexiBee API
         */
        define('FLEXIBEE_PASSWORD', '8Ojeton_');
        /*
         * Společnost v FlexiBee
         */
        define('FLEXIBEE_COMPANY', 'flexipeehp');


        break;

    default:
//
// Config for localhost
//

        /*
         * URL Flexibee API
         */
        define('FLEXIBEE_URL', 'https://localhost:5434');
        /*
         * Uživatel FlexiBee API
         */
        define('FLEXIBEE_LOGIN', 'admin');
        /*
         * Heslo FlexiBee API
         */
        define('FLEXIBEE_PASSWORD', 'admin123');
        /*
         * Společnost v FlexiBee
         */
        define('FLEXIBEE_COMPANY', 'testing_s_r_o_');

        break;
}


