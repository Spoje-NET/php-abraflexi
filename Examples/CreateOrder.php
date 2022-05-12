#!/usr/bin/php -f
<?php

/**
 * AbraFlexi - Example how to Create Order With items
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2022 Vitex Software
 */

namespace Example\AbraFlexi;

use AbraFlexi\Exception;
use AbraFlexi\ObjednavkaPrijata;

define('EASE_LOGGER', 'console');

include_once './config.php';
include_once '../vendor/autoload.php';

$orderer = new ObjednavkaPrijata('code:OBJ:' . time(), ['autoload' => false]);
$orderer->setDataValue('typDokl', 'code:OBP'); //Choose one from https://demo.flexibee.eu/c/demo/typ-objednavky-prijate
$orderer->addArrayToBranch(['cenik'=>'code:AGNUS']); //See columns here: https://demo.flexibee.eu/c/demo/objednavka-prijata-polozka/properties

try {
    if ($orderer->sync() == true) {
        print_r($orderer->getData());
        $orderer->addStatusMessage($orderer->getRecordIdent(), 'success');
    }
} catch (Exception $exc) {
    $orderer->addStatusMessage($exc->getMessage(), 'error');
    echo $exc->getTraceAsString();
}


/**
 "/usr/bin/php" "/home/vitex/Projects/EASE/php-spojenet-abraflexi/Examples/CreateOrder.php"
Array
(
    [id] => 496
    [lastUpdate] => AbraFlexi\DateTime Object
        (
            [isNull] => 
            [date] => 2022-05-12 23:27:44.000000
            [timezone_type] => 1
            [timezone] => +02:00
        )

    [kod] => OBJ:1652390863
    [zamekK] => zamek.otevreno
    [zamekK@showAs] => Otevřeno
    [cisDosle] => 
    [varSym] => 
    [cisSml] => 
    [datObj] => AbraFlexi\Date Object
        (
            [isNull] => 1
            [date] => 2022-05-12 23:27:44.985877
            [timezone_type] => 3
            [timezone] => Europe/Berlin
        )

    [cisDodak] => 
    [doprava] => 
    [datVyst] => AbraFlexi\Date Object
        (
            [isNull] => 
            [date] => 2022-05-12 00:00:00.000000
            [timezone_type] => 1
            [timezone] => +02:00
        )

    [datTermin] => AbraFlexi\Date Object
        (
            [isNull] => 1
            [date] => 2022-05-12 23:27:44.985927
            [timezone_type] => 3
            [timezone] => Europe/Berlin
        )

    [datReal] => AbraFlexi\Date Object
        (
            [isNull] => 1
            [date] => 2022-05-12 23:27:44.985939
            [timezone_type] => 3
            [timezone] => Europe/Berlin
        )

    [popis] => 
    [poznam] => 
    [uvodTxt] => 
    [zavTxt] => 
    [sumOsv] => 0
    [sumZklSniz] => 280
    [sumZklSniz2] => 0
    [sumZklZakl] => 0
    [sumZklCelkem] => 280
    [sumDphSniz] => 42
    [sumDphSniz2] => 0
    [sumDphZakl] => 0
    [sumDphCelkem] => 42
    [sumCelkSniz] => 322
    [sumCelkSniz2] => 0
    [sumCelkZakl] => 0
    [sumCelkem] => 322
    [sumOsvMen] => 0
    [sumZklSnizMen] => 0
    [sumZklSniz2Men] => 0
    [sumZklZaklMen] => 0
    [sumZklCelkemMen] => 0
    [sumDphZaklMen] => 0
    [sumDphSnizMen] => 0
    [sumDphSniz2Men] => 0
    [sumDphCelkemMen] => 0
    [sumCelkSnizMen] => 0
    [sumCelkSniz2Men] => 0
    [sumCelkZaklMen] => 0
    [sumCelkemMen] => 0
    [sumNaklady] => 200
    [slevaDokl] => 0
    [kurz] => 0
    [kurzMnozstvi] => 0
    [stavUzivK] => 
    [nazFirmy] => 
    [ulice] => 
    [mesto] => 
    [psc] => 
    [eanKod] => 
    [ic] => 
    [dic] => 
    [pocetPriloh] => 0
    [postovniShodna] => 1
    [faNazev] => 
    [faNazev2] => 
    [faUlice] => 
    [faMesto] => 
    [faPsc] => 
    [faEanKod] => 
    [bezPolozek] => 
    [szbDphSniz] => 15
    [szbDphSniz2] => 10
    [szbDphZakl] => 21
    [storno] => 
    [zaokrJakSumK] => zaokrJak.matem
    [zaokrJakSumK@showAs] => matematicky
    [zaokrNaSumK] => zaokrNa.jednotky
    [zaokrNaSumK@showAs] => 1
    [zaokrJakDphK] => 
    [zaokrNaDphK] => 
    [metodaZaokrDoklK] => metodaZaokr.zklDph
    [metodaZaokrDoklK@showAs] => do základu a DPH
    [vytvaretKorPol] => 
    [stitky] => 
    [typDokl] => AbraFlexi\Relation Object
        (
            [value] => code:OBP
            [target] => typ-objednavky-prijate
            [ref] => /c/demo/typ-objednavky-prijate/23
            [showAs] => OBP: Objednávka přijatá
        )

    [mena] => AbraFlexi\Relation Object
        (
            [value] => code:CZK
            [target] => mena
            [ref] => /c/demo/mena/31
            [showAs] => CZK: Česká koruna
        )

    [konSym] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => konst-symbol
            [ref] => 
            [showAs] => 
        )

    [firma] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => adresar
            [ref] => 
            [showAs] => 
        )

    [stat] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => stat
            [ref] => 
            [showAs] => 
        )

    [faStat] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => stat
            [ref] => 
            [showAs] => 
        )

    [mistUrc] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => misto-urceni
            [ref] => 
            [showAs] => 
        )

    [bankovniUcet] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => bankovni-ucet
            [ref] => 
            [showAs] => 
        )

    [typDoklBan] => 
    [statDph] => AbraFlexi\Relation Object
        (
            [value] => code:CZ
            [target] => stat
            [ref] => /c/demo/stat/39
            [showAs] => Česká republika
        )

    [stredisko] => AbraFlexi\Relation Object
        (
            [value] => code:C
            [target] => stredisko
            [ref] => /c/demo/stredisko/1
            [showAs] => C: Centrála
        )

    [cinnost] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => cinnost
            [ref] => 
            [showAs] => 
        )

    [zakazka] => AbraFlexi\Relation Object
        (
            [value] => code:OBJ:1652390863
            [target] => zakazka
            [ref] => /c/demo/zakazka/514
            [showAs] => OBJ:1652390863: OBJ:1652390863
        )

    [uzivatel] => AbraFlexi\Relation Object
        (
            [value] => code:winstrom
            [target] => uzivatel
            [ref] => /c/demo/uzivatel/7
            [showAs] => winstrom
        )

    [zodpOsoba] => AbraFlexi\Relation Object
        (
            [value] => code:winstrom
            [target] => uzivatel
            [ref] => /c/demo/uzivatel/7
            [showAs] => winstrom
        )

    [kontaktOsoba] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => kontakt
            [ref] => 
            [showAs] => 
        )

    [kontaktJmeno] => 
    [kontaktEmail] => 
    [kontaktTel] => 
    [rada] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => rada-objednavky-prijate
            [ref] => 
            [showAs] => 
        )

    [rada@if-not-found] => null
    [smlouva] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => smlouva
            [ref] => 
            [showAs] => 
        )

    [formaDopravy] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => forma-dopravy
            [ref] => 
            [showAs] => 
        )

    [uuid] => a8ed697854f22370ca0d8849c972b791f58205f8
    [source] => 
    [balikPocet] => 0
    [formaUhradyCis] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => forma-uhrady
            [ref] => 
            [showAs] => 
        )

    [procReal] => 0
    [faktSouhrn] => 
    [faktTxt] => 
    [typDoklNabFak] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => typ-faktury-vydane
            [ref] => 
            [showAs] => 
        )

    [skladCil] => AbraFlexi\Relation Object
        (
            [value] => 
            [target] => sklad
            [ref] => 
            [showAs] => 
        )

    [polozkyObchDokladu] => Array
        (
            [0] => Array
                (
                    [id] => 1464
                    [lastUpdate] => 2022-05-12T23:27:44.471+02:00
                    [kod] => AGNUS
                    [eanKod] => 
                    [nazev] => AGNUS
                    [nazevA] => 
                    [nazevB] => 
                    [nazevC] => 
                    [cisRad] => 1
                    [typPolozkyK] => typPolozky.katalog
                    [typPolozkyK@showAs] => Položka z ceníku
                    [baleniId] => 1
                    [mnozBaleni] => 1.0
                    [mnozMj] => 1.0
                    [typCenyDphK] => typCeny.bezDph
                    [typCenyDphK@showAs] => bez DPH
                    [typSzbDphK] => typSzbDph.dphSniz
                    [typSzbDphK@showAs] => snížená
                    [szbDph] => 15.0
                    [cenaMj] => 280.0
                    [slevaPol] => 0.0
                    [uplSlevaDokl] => true
                    [sumZkl] => 280.0
                    [sumDph] => 42.0
                    [sumCelkem] => 322.0
                    [sumZklMen] => 0.0
                    [sumDphMen] => 0.0
                    [sumCelkemMen] => 0.0
                    [objem] => 0.0
                    [cenJednotka] => 1.0
                    [cenaMjNakup] => 200.0
                    [cenaMjProdej] => 300.0
                    [cenaMjCenikTuz] => 300.0
                    [objednatK] => 
                    [rezervovat] => false
                    [mnozMjPlan] => 0.0
                    [mnozMjReal] => 0.0
                    [mnozMjZbyva] => 1.0
                    [vyrobce] => 
                    [autoZaokr] => false
                    [autogen] => false
                    [poznam] => 
                    [slevaDokl] => 0.0
                    [datVyst] => 2022-05-12+02:00
                    [kopZakazku] => true
                    [kopStred] => true
                    [kopCinnost] => true
                    [kopKlice] => true
                    [storno] => false
                    [stornoPol] => false
                    [sklad] => code:STANDARD
                    [sklad@ref] => /c/demo/sklad/4
                    [sklad@showAs] => STANDARD: Standardní sklad
                    [stredisko] => code:C
                    [stredisko@ref] => /c/demo/stredisko/1
                    [stredisko@showAs] => C: Centrála
                    [cinnost] => 
                    [mena] => code:CZK
                    [mena@ref] => /c/demo/mena/31
                    [mena@showAs] => CZK: Česká koruna
                    [zakazka] => code:OBJ:1652390863
                    [zakazka@ref] => /c/demo/zakazka/514
                    [zakazka@showAs] => OBJ:1652390863: OBJ:1652390863
                    [dodavatel] => 
                    [cenik] => code:AGNUS
                    [cenik@ref] => /c/demo/cenik/320
                    [cenik@showAs] => AGNUS: AGNUS
                    [cenHlad] => 
                    [mj] => code:KG
                    [mj@ref] => /c/demo/merna-jednotka/1
                    [mj@showAs] => KG: kilogram
                    [mjObjem] => 
                    [sazbaDph] => 22
                    [sazbaDph@showAs] => 15 %
                    [sazbaDph@if-not-found] => null
                    [sazbaDph@ref] => /c/demo/sazba-dph/22
                    [idPolObchZdroj] => 
                    [stitky] => 
                    [source] => 
                    [marze] => 40.0
                    [minMarze] => 0.0
                    [doklObch] => code:OBJ:1652390863
                    [doklObch@ref] => /c/demo/objednavka-prijata/496
                    [doklObch@showAs] => OBJ:1652390863
                    [rezervovatMj] => 0.0
                    [objednanoMj] => 0.0
                    [poplatekParentPolObch] => 
                    [neseskupovatObj] => false
                    [datTermin] => 
                    [kopDatTermin] => true
                )

        )

)
05/12/22 23:27:44 •AbraFlexi\ObjednavkaPrijata‣  ❁ code:OBJ:1652390863
Done.

 */