#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to get relation data
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

$contact_id = askForFlexiBeeID('Contact');

/*
 * FlexiPeeHP Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */
$contact = new \FlexiPeeHP\Kontakt($contact_id,
    ['defaultUrlParams' => ['relations' => 'adresar']]);
$adresy  = $contact->getDataValue('adresy');
if (count($adresy)) {
    foreach ($adresy as $adresa) {
        echo $adresa['nazev']."\n";
    }
} else {
    $contact->addStatusMessage('Source Contact does not exists');
}
