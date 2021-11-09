#!/usr/bin/php -f
<?php

/**
 * AbraFlexi - Example how to create Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\AbraFlexi;

use \AbraFlexi\RO;
use \AbraFlexi\FakturaVydana;

define('EASE_LOGGER', 'syslog|console');
include_once './config.php';
include_once '../vendor/autoload.php';

$invoiceId = 1;

$inv = new FakturaVydana($invoiceId, ['autoload' => false]);
$inv->takeData(["stavMailK" => "stavMail.odeslano"]);
$inv->sync();

$inv->addStatusMessage(_('Invoice') . ': ' . $inv->getRecordIdent() . ' ' . $inv->getRecordCode(),
        $inv->sync() ? 'success' : 'error' );
