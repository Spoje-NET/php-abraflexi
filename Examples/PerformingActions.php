#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Document Storno Example 
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoiceID = askForFlexiBeeID();

$invoice = new \FlexiPeeHP\FakturaVydana($invoiceID);
$invoice->performAction('storno','int');



