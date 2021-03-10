#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Sharing data and connection options between objects
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

/**
 * @var \AbraFlexi\FakturaVydana With initial type code:FAKTURA, connected to 
 *                                default constatnt('FLEXIBEE_URL')
 */
$originalInvoice = new \AbraFlexi\FakturaVydana(['typDokl' => \AbraFlexi\RO::code('FAKTURA')]);

/**
 * @var \AbraFlexi\FakturaVydana 
 */
$invoice = new \AbraFlexi\FakturaVydana($originalInvoice->getData(),
    $originalInvoice->getConnectionOptions());

/**
 * Save to FlexiBee a obtain processed record record with its new CODE, Number etc.
 */
$invoice->sync();


/**
 * Print Link to new record in FlexiBee web interface
 */
echo '<a href="'.$invoice->getApiURL('html').'">'.$invoice.'</a>';

