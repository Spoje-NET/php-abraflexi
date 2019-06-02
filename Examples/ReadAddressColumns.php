#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to read columns
 *
 *              Z evidence Adresáře odběratelů vytáhni 3 sloupečky
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$adreser   = new \FlexiPeeHP\Adresar();
$addresses = $adreser->getColumnsFromFlexibee(['id', 'nazev', 'email'],
    ['typVztahuK' => 'typVztahu.odberatel'], 'nazev');
