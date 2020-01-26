<?php

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$save = array(
    'id' => array(
        14,
        'ext:evid:2434',
        'ext:another:753'
    ),
    'eanKod' => 12233587868
);

$addr = new \FlexiPeeHP\Adresar($save);

$addr->getExternalIDs(); // [ 0=> 'ext:evid:2434', 1 => 'ext:another:753' ]
$addr->getMyKey(); // 1000

$addr->addExternalID( 'EXTERNAL:1575454719' );
