#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to get bank account for company
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

$companyID = askForFlexiBeeID();


$firma = new \FlexiPeeHP\Adresar($companyID);
if ($firma->getMyKey()) {
    var_dump($firma->getBankAccountNumber());
    
/**
 array(1) {
  [0] =>
  array(5) {
    'id' =>
    string(1) "5"
    'buc' =>
    string(9) "789987987"
    'smerKod' =>
    string(9) "code:0100"
    'smerKod@showAs' =>
    string(4) "0100"
    'smerKod@ref' =>
    string(29) "/c/flexipeehp/penezni-ustav/1"
  }
}

 */    
    
} else {
    $firma->addStatusMessage('Source Address does not exists in '.$firma->getApiURL());
}

