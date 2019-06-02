#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example 
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$adresar = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:100', 'nazev' => 'FirmaAB',
    ], ['atomic' => 'false']); //Atomic Transaction: https://www.flexibee.eu/api/dokumentace/ref/tx/

$adresar2 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:200', 'nazev' => 'FirmaCD'],
    ['offline' => true]);
$adresar3 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:300', 'nazev' => 'FirmaEF'],
    ['offline' => true]);
$adresar4 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:400', 'nazev' => 'FirmaGH'],
    ['offline' => true]);

$banka = new \FlexiPeeHP\Banka(['id' => 'EXT:APP:500', 'typDokl' => 'code:STANDARD',
    'banka' => 'code:BANKOVNÍ ÚČET'], ['offline' => true]);

$adresarBankovniUcet = new \FlexiPeeHP\Adresar(['iban' => 'CZ9501000000001234567899',
    'bic' => 'KOMBCZPP', 'firma' => 'EXT:APP:300'],
    ['evidence' => 'adresar-bankovni-ucet'], ['offline' => true]);

$adresar->join($banka);

$adresarBankovniUcet->join($adresar2);

$adresar3->join($adresar4);

$adresarBankovniUcet->join($adresar3);

$adresar->join($adresarBankovniUcet);


echo "Request Sent to FlexiBee:\n". $adresar->getJsonizedData(null, JSON_PRETTY_PRINT);

echo "\nFlexiBee Response:\n".var_export($adresar->insertToFlexiBee(), true);

echo "\nResultIDs was pushed to its source objects:\n".
'$banka: '.$banka->getMyKey()."\n".
'$adresar: '.$adresar->getMyKey()."\n".
'$adresar2: '.$adresar2->getMyKey()."\n".
'$adresar3: '.$adresar3->getMyKey()."\n".
'$adresar4: '.$adresar4->getMyKey()."\n".
'$adresarBankovniUcet: '.$adresarBankovniUcet->getMyKey()."\n";
