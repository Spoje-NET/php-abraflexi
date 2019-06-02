#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Převodka
 *
 * @link https://charlieblog.eu/clanek-flexibee-api-prevodka 
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$skladovyPohyb = new \FlexiPeeHP\SkladovyPohyb(    [
        'id'=> 'ext:PREVODKA:1', //Vytvoříme záznam s tímto ID
        'typDokl'=> 'code:PŘEVODKA', 
        'sklad'=> 'code:SKLAD-1', //Zdrojový sklad
        'typPohybuK'=> 'typPohybu.vydej',
        'typPohybuSkladK'=> 'typPohybuSklad.vydejPrevod',
        'skladCil'=> 'code:SKLAD-2' //Cílový sklad
      ]);

$skladovyPohyb->addArrayToBranch(['cenik'=> 'code:A','mnozMj'=> '3'], 'skladovePolozky');
$skladovyPohyb->addArrayToBranch(['cenik'=> 'code:B','mnozMj'=> '3'], 'skladovePolozky');
$skladovyPohyb->insertToFlexiBee();


$skladovyPohyb->dataReset(); //Vyprázdníme objekt aby se neposílala zbytečná data
$skladovyPohyb->setMyKey('ext:PREVODKA:1'); //Nastavíme id záznamu se kterým pracujeme
$skladovyPohyb->performAction('dokoncit-prevodku'); //Vykonání akce

