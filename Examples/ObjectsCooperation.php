#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Sharing data and connection options between objects
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

/**
 * @var \FlexiPeeHP\FakturaVydana With initial type code:FAKTURA, connected to 
 *                                default constatnt('FLEXIBEE_URL')
 */
$originalInvoice = new \FlexiPeeHP\FakturaVydana(['typDokl' => \FlexiPeeHP\FlexiBeeRO::code('FAKTURA')]);

/**
 * @var \FlexiPeeHP\FakturaVydana 
 */
$invoice = new \FlexiPeeHP\FakturaVydana($originalInvoice->getData(),
    $originalInvoice->getConnectionOptions());

/**
 * Save to FlexiBee a obtain processed record record with its new CODE, Number etc.
 */
$invoice->sync();


/**
 * Print Link to new record in FlexiBee web interface
 */
echo '<a href="'.$invoice->getApiURL('html').'">'.$invoice.'</a>';

