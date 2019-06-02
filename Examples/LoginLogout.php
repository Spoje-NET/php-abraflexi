#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to create Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';


$prober = new \FlexiPeeHP\FlexiBeeRO();

$prober->login();

echo $prober->authSessionId;

$prober->logout();

