#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to check connection
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017-20201 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

$companer  = new \AbraFlexi\Company();
$companies     = $companer->getFlexiData();

if (array_key_exists('company', $companies) === true) {
    $companer->addStatusMessage('Connection OK', 'success');
} else {
    $companer->addStatusMessage('Connection failed', 'warning');
}
