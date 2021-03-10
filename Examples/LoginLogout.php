#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to create Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';


$prober = new \AbraFlexi\RO();

$prober->login();

echo $prober->authSessionId;

$prober->logout();

