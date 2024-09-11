#!/usr/bin/php -f
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
/**
 * @var \AbraFlexi\Stitek Label Object
 */
$stitek = new \AbraFlexi\Stitek();

$stitek->createNew('Without Invoice', ['pokladna']);

$stitek->createNew(
    'Example Label',
    ['faktura-vydana', 'faktura-prijata'],
    ['kod' => 'EXAMPLE'],
);

$banker = new \AbraFlexi\Banka();
$stitek->createNew('Unidentified', [$banker->getEvidence()]);

$labelsDefinedForBank = \AbraFlexi\Stitek::getAvailbleLabels($banker);
