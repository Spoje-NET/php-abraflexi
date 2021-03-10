#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Naskaladnění včetně sériových čísel
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';



$storage             = 'SKLAD';
$productCode         = \Ease\Sand::randomString();
$serialNumbers       = [
    \Ease\Sand::randomString(),
    \Ease\Sand::randomString(),
    \Ease\Sand::randomString(),
    \Ease\Sand::randomString()
];
$defaultSerialNumber = \Ease\Sand::randomString();



/** Preparation * */
//We need an exising item
$product = new \AbraFlexi\Cenik();
$product->insertToFlexiBee([
    'kod' => $productCode,
    'nazev' => $productCode,
    'typZasobyK' => 'typZasoby.zbozi',
    'evidVyrCis' => true,
// 'unikVyrCis'=> fase,
    'skladove' => true
]);

//with storage card for at least current accounting period
$storageCard = new \AbraFlexi\SkladovaKarta();
$storageCard->insertToFlexiBee([
    'sklad' => \AbraFlexi\RO::code($storage),
    'cenik' => \AbraFlexi\RO::code($productCode),
    'ucetObdobi' => \AbraFlexi\RO::code(date('Y'))
]);

/** Preparation End * */
$skladovyPohyb = new \AbraFlexi\SkladovyPohyb([
    'id' => 'ext:PRIJEMKA:'.time(),
    'typDokl' => \AbraFlexi\RO::code('STANDARD'),
    'sklad' => \AbraFlexi\RO::code($storage),
    'cenik' => \AbraFlexi\RO::code($productCode),
    'typPohybuK' => 'typPohybu.prijem',
    ],['debug'=>true]);

// We Need
$productModel = new \AbraFlexi\SkladovyPohybPolozka([
    'sklad' => \AbraFlexi\RO::code($storage),
    'cenik' => \AbraFlexi\RO::code($productCode)
    ], ['offline' => true]);

//Add Serial numbers one by one
foreach ($serialNumbers as $serialNumber) {
    $productModel->addSerialNumber($serialNumber);
}

//Also add default serial number
$productModel->addSerialNumber($defaultSerialNumber, true); //Add another number - the Main one
//$skladovyPohyb->addArrayToBranch([$productModel->getEvidence() => $productModel->getData()]);
$skladovyPohyb->addObjectToBranch($productModel);


//And Now We can save it into FlexiBee
$skladovyPohyb->insertToFlexiBee();


echo $skladovyPohyb->postFields;
echo $skladovyPohyb->lastCurlResponse;
