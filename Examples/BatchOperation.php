#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Dávkové operace
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/batch-operations/ Dávkové Operace
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$adr = new \FlexiPeeHP\Adresar(null,['filter'=>"nazev like 'FlexiBee Systems s.r.o.'"]);
$adr->insertToFlexiBee([
    'nazev'=>'ABRA Flexi s.r.o.',
    'ulice'=>'Jeremiášova 1422/7b',
    'mesto'=>'Praha 13 Stodůlky',
    'psc'=>'155 00'
    ]);

/*
{"winstrom":{"@version":"1.0","adresar":{"nazev":"ABRA Flexi s.r.o.","ulice":"Jeremi\u00e1\u0161ova 1422\/7b","mesto":"Praha 13 Stod\u016flky","psc":"155 00"},"adresar@filter":"nazev like 'FlexiBee Systems s.r.o.'"}}
*/
