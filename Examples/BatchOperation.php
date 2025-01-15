#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$adr = new \AbraFlexi\Adresar(null, ['filter' => "nazev like 'FlexiBee Systems s.r.o.'"]);
$adr->insertToFlexiBee([
    'nazev' => 'ABRA Flexi s.r.o.',
    'ulice' => 'Jeremiášova 1422/7b',
    'mesto' => 'Praha 13 Stodůlky',
    'psc' => '155 00',
]);

/*
{"winstrom":{"@version":"1.0","adresar":{"nazev":"ABRA Flexi s.r.o.","ulice":"Jeremi\u00e1\u0161ova 1422\/7b","mesto":"Praha 13 Stod\u016flky","psc":"155 00"},"adresar@filter":"nazev like 'FlexiBee Systems s.r.o.'"}}
 */
