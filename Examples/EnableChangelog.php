#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to enable AbraFlexi changelog
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2021 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

$changes = new \AbraFlexi\Changes();
$changesEnabled = $changes->enable();
//$changesDisabled = $changes->disable();

