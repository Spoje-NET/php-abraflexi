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

$skladovyPohyb = new \AbraFlexi\SkladovyPohyb([
    'id' => 'ext:PREVODKA:1', // Vytvoříme záznam s tímto ID
    'typDokl' => 'code:PŘEVODKA',
    'sklad' => 'code:SKLAD-1', // Zdrojový sklad
    'typPohybuK' => 'typPohybu.vydej',
    'typPohybuSkladK' => 'typPohybuSklad.vydejPrevod',
    'skladCil' => 'code:SKLAD-2', // Cílový sklad
]);

$skladovyPohyb->addArrayToBranch(['cenik' => 'code:A', 'mnozMj' => '3'], 'skladovePolozky');
$skladovyPohyb->addArrayToBranch(['cenik' => 'code:B', 'mnozMj' => '3'], 'skladovePolozky');
$skladovyPohyb->insertToFlexiBee();

$skladovyPohyb->stripBody(); // Vyprázdníme objekt aby se neposílala zbytečná data
$skladovyPohyb->performAction('dokoncit-prevodku'); // Vykonání akce
