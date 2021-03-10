#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Jak najít Daňový doklad vytvoření po zaplacení zálohové faktury
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';
include_once './common.php';

$invoiceID = askForFlexiBeeID();

/*
 * AbraFlexi Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);

$vazby = $invoice->reindexArrayBy($invoice->getVazby(), 'typVazbyK');

$polozka = new \AbraFlexi\RO(intval($vazby['typVazbyDokl.odpocetZALOHY']['a']),
    ['evidence' => 'faktura-vydana-polozka']);

$faktura = new \AbraFlexi\FakturaVydana($polozka->getDataValue('doklFak'));

