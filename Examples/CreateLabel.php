#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to create FlexiBee label
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';
/**
 * @var \FlexiPeeHP\Stitek Label Object
 */
$stitek = new \FlexiPeeHP\Stitek();

$stitek->createNew('Without Invoice', ['pokladna']);

$stitek->createNew('Example Label', ['faktura-vydana', 'faktura-prijata'],
    ['kod' => 'EXAMPLE']);


$banker = new \FlexiPeeHP\Banka();
$stitek->createNew('Unidentified', [$banker->getEvidence()]);

$labelsDefinedForBank = \FlexiPeeHP\Stitek::getAvailbleLabels($banker);
