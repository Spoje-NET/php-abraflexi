#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how to create FlexiBee label
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';
/**
 * @var \AbraFlexi\Stitek Label Object
 */
$stitek = new \AbraFlexi\Stitek();

$stitek->createNew('Without Invoice', ['pokladna']);

$stitek->createNew('Example Label', ['faktura-vydana', 'faktura-prijata'],
    ['kod' => 'EXAMPLE']);


$banker = new \AbraFlexi\Banka();
$stitek->createNew('Unidentified', [$banker->getEvidence()]);

$labelsDefinedForBank = \AbraFlexi\Stitek::getAvailbleLabels($banker);
