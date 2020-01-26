<?php

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$options = [];

$customerData = [
    'customerName' => 'Pokuston',
    'email' => 'pokus@ton.sk',
    'street' => 'pokusna',
    'psc' => '23122',
    'city' => 'Blava',
    'mobil1' => '6021231564',
    'ico' => '1212633',
    'dic' => 'SK123133',
    'bankAccount' => 'CZ9520100000002800677051'
];



$data = [
    'id' => 'ext:test:'.time(),
    'nazev' => $customerData['customerName'],
    'email' => trim($customerData['email']),
    'ulice' => $customerData['street'],
    'psc' => $customerData['psc'],
    'mesto' => $customerData['city'],
    'mobil' => $customerData['mobil1'],
    'ic' => $customerData['ico'],
    'dic' => $customerData['dic'],
];
if ($customerData['icDph'] ?? null) {
    $data['vatId']     = $customerData['icDph'];
    $data['platceDph'] = true;
}
if ($customerData['phone'] ?? null) {
    $data['tel'] = $customerData['phone'];
}

echo (sprintf("Inserting: %s", $data['nazev']));


$adresar = new \FlexiPeeHP\Adresar($data);

if ($customerData['bankAccount'] ?? null) {
    $kodBanky = substr($customerData['bankAccount'], 4, 4);

    $adresarBankovniUcet = new \FlexiPeeHP\Adresar([
        'iban' => $customerData['bankAccount'],
//                'bic' => 'XXXX',
        'smerKod' => 'code:0300',
        'firma' => $data['id'],
        ],
        array_merge($options,
            ['evidence' => 'adresar-bankovni-ucet', 'offline' => true]));
    $adresar->join($adresarBankovniUcet);
}

$adresar->insertToFlexiBee();
