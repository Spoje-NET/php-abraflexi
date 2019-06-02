#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to check connection
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$companer  = new \FlexiPeeHP\Company();
$companies     = $companer->getFlexiData();

if (array_key_exists('company', $companies) === true) {
    $companer->addStatusMessage('Connection OK', 'success');
} else {
    $companer->addStatusMessage('Connection failed', 'warning');
}
