#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

include_once './common.php';

$companyID = askForFlexiBeeID();

$firma = new \AbraFlexi\Adresar($companyID);

if ($firma->getMyKey()) {
    var_dump($firma->getBankAccountNumber());

    /**
     * array(1) {
     * [0] =>
     * array(5) {
     * 'id' =>
     * string(1) "5"
     * 'buc' =>
     * string(9) "789987987"
     * 'smerKod' =>
     * string(9) "code:0100"
     * 'smerKod@showAs' =>
     * string(4) "0100"
     * 'smerKod@ref' =>
     * string(29) "/c/flexipeehp/penezni-ustav/1"
     * }
     * }.
     */
} else {
    $firma->addStatusMessage('Source Address does not exists in '.$firma->getApiURL());
}
