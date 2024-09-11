<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$save = [
    'id' => [
        14,
        'ext:evid:2434',
        'ext:another:753',
    ],
    'eanKod' => 12233587868,
];

$addr = new \AbraFlexi\Adresar($save);

$addr->getExternalIDs(); // [ 0=> 'ext:evid:2434', 1 => 'ext:another:753' ]
$addr->getMyKey(); // 1000

$addr->addExternalID('EXTERNAL:1575454719');
