# PHP AbraFlexi

![PHP AbraFlexi Logo](project-logo.png?raw=true "Project Logo")

PHP8.1+ Based Library for easy interaction with Czech accounting system AbraFlexi.

CZ: PHP Knihovna pro snadnou práci s českým ekonomickým systémem [AbraFlexi](https://www.abraflexi.eu/)

[![Latest Version](https://img.shields.io/github/release/Spoje-NET/php-abraflexi.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/releases)
[![Software License](https://img.shields.io/badge/license-GNU-brightgreen.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/blob/master/LICENSE)
[![GitHub forks](https://img.shields.io/github/forks/Spoje-NET/php-abraflexi)](https://github.com/Spoje-NET/php-abraflexi/network)
[![wakatime](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/48520b87-4e9a-4eca-861a-a5dd85b11374.svg)](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/48520b87-4e9a-4eca-861a-a5dd85b11374)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/flexipeehp.svg)](https://hub.docker.com/r/vitexsoftware/flexipeehp/)
[![Latest stable](https://img.shields.io/packagist/v/spojenet/php-abraflexi.svg?style=flat-square)](https://packagist.org/packages/spojenet/php-abraflexi)

[![Latest Stable Version](https://poser.pugx.org/spojenet/flexibee/v/stable)](https://packagist.org/packages/spojenet/flexibee)
[![Total Downloads](https://poser.pugx.org/spojenet/flexibee/downloads)](https://packagist.org/packages/spojenet/flexibee)
[![Total Downloads](https://img.shields.io/packagist/dt/spojenet/flexibe.svg?style=flat-square)](https://packagist.org/packages/spojenet/flexibee)
[![Latest Unstable Version](https://poser.pugx.org/spojenet/flexibee/v/unstable)](https://packagist.org/packages/spojenet/flexibee)
[![License](https://poser.pugx.org/spojenet/flexibee/license)](https://packagist.org/packages/spojenet/flexibee)
[![Monthly Downloads](https://poser.pugx.org/spojenet/flexibee/d/monthly)](https://packagist.org/packages/spojenet/flexibee)
[![Daily Downloads](https://poser.pugx.org/spojenet/flexibee/d/daily)](https://packagist.org/packages/spojenet/flexibee)

# Poděkování

Vznik této knihovny by nebyl možný bez laskavé podpory společnosti [Spoje.Net](http://www.spoje.net),
která hradila vývoj řešení pro propojení LMS / AbraFlexi a importu skladu. :+1:

![Spoje.Net](spoje-net_logo.gif?raw=true "Spoje.Net")

**Dále chci poděkovat technické podpoře společnosti [ABRA Flexi s.r.o.](https://www.abraflexi.eu/podpora/) za jejich svatou trpělivost
při reakcích na mé ne vždy bystré otázky a bugreporty.**

Parsování výsledků pro účely GDPR logování bylo dopracováno za laskavé podpory [&lt;PureHTML&gt;](https://purehtml.cz/)

Instalace
---------

```shell
    composer require spojenet/flexibee
```

aby váš výsledný composer.json obsahoval:

```json
{
    "require": {
        "spojenet/flexibee": "^3.6"
    }
}
```

spustí se příkazem **composer install** instalace:

![Compser Install](flexipeehp-composer-install.png?raw=true "Installation")

Konfigurace
-----------

Konfigurace se provádí nastavením následujících konstant:

```php
   /*
    * URL AbraFlexi API
    */
    define('ABRAFLEXI_URL', 'https://abraflexi-dev.spoje.net:5434');
   /*
    * Uživatel AbraFlexi API
    */
    define('ABRAFLEXI_LOGIN', 'apiuser');
   /*
    * Heslo AbraFlexi API
    */
    define('ABRAFLEXI_PASSWORD', 'apipass');
   /*
    * Společnost v AbraFlexi
    */
    define('ABRAFLEXI_COMPANY', 'test_s_r_o_');
   /*
    * Nebo pokud nechceme používat jméno a heslo 
    */
    define('ABRAFLEXI_AUTHSESSID', '6QuifebMits'); //Volitelné
   /*
    * Pomalý server, velká databáze a přes modem k tomu
    */
    define('ABRAFLEXI_TIMEOUT', 60); //Volitelné
   /*
    * Pomalý server, velká databáze a přes modem k tomu
    */
    define('ABRAFLEXI_EXCEPTIONS', true); //Vracet PHP vyjímku v případě že AbraFlexi vrátí chybu
```

Pokud nejsou konstanty nastaveny, pouší se třídy také o konfiguraci ze stejnojmených proměnných prostředí. např getenv('ABRAFLEXI_URL')

Taktéž je možné přihlašovací údaje zadávat při vytváření instance třídy.

```php
    $invoicer = new \AbraFlexi\FakturaVydana(null,[
                'company' => 'Firma_s_r_o_',
                'url' => 'https://abraflexi.firma.cz/',
                'user' => 'rest',
                'password' => '-dj3x21xaA_'
            ]);
```

Tento způsob nastavení má vyšší prioritu než výše uvedené definovaní konstant.

```php
    $order = new \AbraFlexi\ObjednavkaPrijata('code:OBP0034/2019',['companyUrl'=> $_GET['companyUrl'], 'authSessionId'=>$_GET['authSessionId'] ])

```

Takto se ke abraflexi a konrétní objednávce může připojit aplikace vyvolaná uživatelským tlačítkem předávajícím hodnoty **companyUrl** a **authSessionId**

Jak to celé funguje ?
---------------------

Ústřední komponentou celé knihovny je Třída RO, která je schopna pomocí
PHP rozšíření curl komunikovat s REST Api AbraFlexi.

Z ní jsou pak odvozeny třídy pro jednotlivé evidence, obsahující metody pro
často používané operace, například "Zaplať" v případě přijatých faktur.

Nová odvozená třída vzniká tak, že jméno třídy je název evidence avšak bez
pomlček. Ty jsou ve jméně nahrazeny velkým písmenem.

```php
    function evidenceToClass($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }
```

Tzn. Pokud chceme odvodit
novou třídu pro evidenci "Měrné jednotky" bude vypadat takto:

```php
    <?php
    /**
     * @link https://demo.abraflexi.eu/c/demo/merna-jednotka/properties Vlastnosti evidence
     */
    class MernaJednotka extends /AbraFlexi/RW
    {
        /**
         * Evidence užitá objektem.
         *
         * @var string
         */
        public $evidence = 'merna-jednotka';
    }
```

A poté je již snadné si vypsat měrné jednotky na 2 řádky:

```php
    $jednotky = new MernaJednotka();
    print_r( $jednotky->getAllFromAbraFlexi() );
```

Pokud chceme aby nově vytvořená třída uměla do abraflexi i zapisovat, je třeba jí
odvodit od předka AbraFlexiRW.

Více příkladů použití je možné najít [v samostatném projektu](https://github.com/VitexSoftware/AbraFlexi-Examples/tree/master/Examples)

Struktura Evidencí, Akcí a vztahů
---------------------------------

V některých případech je dobré znát jaké můžeme provádět akce, či jáká je
struktura evidence. Tyto informace je možno získat voláním
<https://demo.abraflexi.eu/c/demo/*/properties.json>
respektive <https://demo.abraflexi.eu/c/demo/*/actions.json>
avšak jedná se o relativně časově náročné operace. Jelikož se struktura
evidencí a Akce či vztahy mezi evidencemi AbraFlexi často nemění AbraFlexi
disponuje mechanizmem který umožní pracovat s těmito údaji bez nutnosti
dotazovat se na ně serveru.

Struktura je uložena ve třídě Structure (Actions,Relations) která obsahuje
staticky definované pole obsahující informace které by jinak bylo nutné získat
z AbraFlexi.

Položku v seznamu evidencí <https://demo.abraflexi.eu/c/demo/evidence-list> je pak
možné kdykoliv snadno ukázat:

```php
    echo \AbraFlexi\Structure::$evidence['faktura-vydana'];
```

Sturktury jednotlivých evidencí jsou pak uloženy ve statických proměnných.
Jejich jméno se řídí stejnými pravidly jako jsou pro vytváření jména nové třídy
jen s tím rozdílem, že první písmeno je malé. Tzn.:

```php
    lcfirst(\AbraFlexi\Functions::evidenceToClassName($evidence))
```

V případě potřeby je možné tyto třídy pak možné vygenerovat s aktuálním obsahem
následujícím příkazem:

  ```shell
  cd tools/
  ./update_all.sh
  ```

Operace trvá několik minut. Zobrazit průběh můžeme takto:

  ```shell
  tail -f /var/log/syslog | grep  AbraFlexitest
  ```

Ladicí režim
------------

Pokud v objektech AbraFlexi nastavíte $this->debug na true, budou se před odesláním
dat do AbraFlexi provedeny dodatečné testy. Kontrolují se tyto možné chyby:

* Existuje vkládané políčko definované pro evidenci ?
* Je vkládané políčko Pouze pro čtení ?
* Pokud je vkládané políčko vazbou, je i polem ?

V ladícím režimu se také ukládají do složky /tmp všechny požadavky na abraflexi a jejich odpovědi

Knihovna obsahuje mechanizmus pro odesílání zaznamenaných chyb při běhu AbraFlexi vývojářům:

Pokud AbraFlexi vrátí Internal Server Error 500, je odeslán vývojářům email obsahující chybovou zprávu.

V případě že je použito AbraFlexi běžící na stejném serveru a je možné číst chybové logy je z nich vypreparován patřičný fragment a i ten je přidán do těla mailu.

Email obsahuje také dodatečné informace o licenci a povolených modulech.

Jako přílohy jsou také připojeny soubory obsahující tělo dotazu na server, tělo jeho odpovědi a soubor obsahující informace o curl.

Během života objektu se chyby evidují a odesílá se pouze první každého druhu.

Změny ve verzi 3.6
------------------

* nastaven výchozí curl timeout na 300
* Maximalizace využití objektu Relation
* Nová třída AbraFlexi\Code nahrazující Functions::code a Functions::uncode
* Dostupné jsou třídy pro všechny evidence ( ne jenom pro ty často používané )

Příkad vytvoření instance třídy FakturaVydana
---------------------------------------------

Výchozí **Nativní typy** se projevují tak že ze serveru ve chlívečku obsahující datum obdržíte php objekt DateTime. ve sloupečku 'id' integer a pod.
Toto chování je možné vypnout pomocí parametru konstruktoru ```['nativeTypes' = false]```

```php
    new \AbraFlexi\FakturaVydana( 'code:VF2-12345', ['nativeTypes'=>false,'debug'=>true,'ignore404'=>false] );
```

Viz.: [constructor RO](https://github.com/Spoje-NET/php-abraflexi/blob/cd829fcb05939ab54ed99aaa63d01b63700cbb83/src/AbraFlexi/RO.php#L450)

Je možno zadat některé z těchto parametrů:

     * user,password,authSessionId - autentifikace
     * company,url,evidence - vynucení parametrů přístupu
     * prefix - pro url začínající jinak než  '/c/' pro  company
     * defaultUrlParams - pole vlastností pak automaticky přidávané
     * debug - pro zapnutí ladícího režimu
     * detail - pro specifikaci požadované [úrovně detailů](https://www.flexibee.eu/api/dokumentace/ref/detail-levels/). 
     * offline - nevykonávají se žádné síťové operace ( nepřiřipojit se při instancování objektu ) 
     * filter - viz [Filtrování](https://www.flexibee.eu/api/dokumentace/ref/filters}
     * ignore404 - v případě že nevím zdali požadovaný záznam existuje nastavte na true aby to nevyhodilo chybu
     * nativeTypes - pokud chci všecho ze serveru vracet jako stringy 
     * timeout - trpělivost než se vyhodí chyba síťové komunikace (předáváno do cURL)
     * companyUrl - načte si z řetězce všechny náležitosti k připojení (heslo pro API atd..)
     * ver - vynucení verze api (pokud chcete volat funkce určené pro nové webové rozhraní)
     * throwException - vyhodit vyjímku při každé vhodné příležitosti

Autoloading dat
---------------

Pokud se konstruktoru objektu předá ID typu int nebo kódem  (code:..) záznamu zavolá tento funkci loadFromAbraFlexi(id)
Poté je možné k načteným hodnotám se dostat za použití metod $this->getData() a RO::getDataValue('nazev')

Datové typy
-----------

Jelikož API vrací vše víceméně jako řetězec, knihovna provádí automatické konverze datových typů:

| Strojový název | Název           | Poznámka    | Ukázka       | PHP Typ  |
| -------------- | :-------------- | ----------- | :----------: | :------- |
| string         | Řetězec         | Kódování je unicode. Lze tedy použít libovolný znak. | šílený koníček こちらは田中さんです | string |
| integer        | Celé číslo      | Musí být bez mezer. Jde o znaménkový 4bajtový integer, ovšem rozsah může být omezený (viz přehled položek dané evidence) | 12 | integer |
| numeric        | Desetinné číslo | Musí být bez mezer, oddělovačem desetinných míst je tečka. Jde o 8bajtový double, ovšem rozsah může být omezený (viz přehled položek dané evidence) | 12.5 | float |
| date           | Datum           | Datum ve formátu YYYY-MM-DD; lze zadat i časovou zónu (YYYY-MM-DDZZZ), ale ta bude ignorována. ZZZ je označení časové zóny (Z nebo +HH:MM nebo -HH:MM). | 1980‑05‑06 2015‑01‑30Z 2008‑09‑01+02:00 | \Date() |
| datetime       | Datum + čas     | Datum a čas ve formátu YYYY-MM-DD'T'HH:MM:SS.SSS; lze zadat i časovou zónu (YYYY-MM-DD'T'HH:MM:SS.SSSZZZ), ale ta bude ignorována. | 1980‑05‑06 1980‑05‑06T12:30:12 2015‑01‑30T22:55:33Z 2008‑09‑01T17:18:14+02:00  2008‑09‑01T17:18:14.075+02:00 | \DateTime() |
| logic          | Logická hod.    | boolean     | true false | boolean |
| select         | Výběr jedné z hodnot | Výběr jedné z hodnot. Je reprezentován jako řetězec.  | typVztahu.odberDodav | string |
| relation       | Vazba mezi daty | Vstupem je záznam z jiné evidence (přehled typů identifikátorů)  | 123 code:CZK ext:DB:232 | \AbraFlexi\Relation |

Testování
---------

PHPUnit testy se nachází ve složce **testing**. Pokud chcete testovat proti jinému
serveru než je oficální <http://demo.abraflexi.eu/> , je třeba změnit nastavení v
souboru **bootstrap.php**.

Obsah proměnné $testServer určuje která z předvolených nastavení budou použita.
A samozřejmě si můžete nadefinovat i vlastní. Jako příklad je zde uveden testovací
server spoje.net.

Pro testování vytvořte prosím nejprve testovací firmu TESTING s.r.o. a nastavte
přístupové údaje uživatele s oprávněním používat REST API. (Což je uživatel
administrátora zadaný při instalaci AbraFlexi.)

Upozornění: testování proti firmě s množstvím faktur a připojenou bankou může
trvat nějakou dobu, jelikož se testuje i zavolání automatického párování dokladů.

Pokud se ve vašem projektu rozhodnete podědit AbraFlexi a k těmto třídám napíšete
testy také  poděděné z AbraFlexi např:

class HookRecieverTest extends \Test\AbraFlexi\ChangesTest

Přidejte do vašeho composer.json i cesty k původním testům:

```json
    "autoload-dev": {
        "psr-4": {
            "Test\\": "vendor/spojenet/php-abraflexi/test/src/AbraFlexi/test/",
            "Test\\Ease\\": "vendor/vitexsoftware/ease-core/tests/src/Ease",
            "Test\\AbraFlexi\\": "vendor/spojenet/php-abraflexi/test/src/AbraFlexi/",
         }
    }
```

Ukázka
------

Ve složce Examples jsou tyto ukázky použití:

| Soubor                                                        | Popis                                 |
| ------------------------------------------------------------- | --------------------------------------|
| [AttachmentSaveToFile.php](Examples/AttachmentSaveToFile.php) | uložení přílohy do souboru
| [AttachmentUpload.php](Examples/AttachmentUpload.php)         | nahrání přílohy
| [AuthSessionIdUsage.php](Examples/AuthSessionIdUsage.php)     | Ukázka autentizace AuthSessionId
| [AuthentizeContact.php](Examples/AuthentizeContact.php)       | autentizace kontaktu
| [BatchOperation.php](Examples/BatchOperation.php)             | Použití filtru při dávkových operacích
| [CreateLabel.php](Examples/CreateLabel.php)                   | práce se štítky
| [DryRun.php](Examples/DryRun.php)                             | Testovací uložení (dry-run)
| [DownloadInvoicePDF.php](Examples/DownloadInvoicePDF.php)     | stažení PDF faktury
| [Error404.php](Examples/Error404.php)                         | práce s neexistujícími záznamy
| [FindOverdueInvoices.php](Examples/FindOverdueInvoices.php)   | najdi faktury po splatnosti
| [GetRecordWithRelation.php](Examples/GetRecordWithRelation.php) | Získání záznamu včetně dat z podevidence
| [GetBankAccountForCompany.php](Examples/GetBankAccountForCompany.php) | Získání bankovního účtu k firmě z adresáře
| [InvoiceLockUnlock.php](Examples/InvoiceLockUnlock.php)       | Zamykání a odemykání záznamu
| [InvoiceCopy.php](Examples/InvoiceCopy.php)                   | vytvoření daňového dokladu ze zálohy
| [LoginLogout](Examples/LoginLogout.php)                       | přihlášení uživatele a jeho odhlášení
| [NajdiDanovyDokladKzalohovemu.php](Examples/NajdiDanovyDokladKzalohovemu.php) | dohledání dokladu
| [Naskladnění.php](Examples/Naskladneni.php)                   | Naskladní produkt se sériovými čísly
| [NewInvoice.php](Examples/NewInvoice.php)                     | Nová faktura se splatností vypsaná jako json
| [ObjectChaining.php](Examples/ObjectChaining.php)             | Řetězení objektů pro více operací v jenom pořadavku
| [ObjectCooperation.php](Examples/ObjectsCooperation.php)      | Sdílení data a parametrů připojení mezi objekty
| [PerformingActions.php](Examples/PerformingActions.php)       | Jak vykonávat akce nad dokladem akce. např. storno
| [ReadAddressColumns.php](Examples/ReadAddressColumns.php)     | vrať konkrétní sloupečky
| [sendInvoiceByMail.php](Examples/sendInvoiceByMail.php)       | odeslání faktury mailem
| [SendReminders.php](Examples/SendReminders.php)               | odeslání upomínek
| [SetContactAuth.php](Examples/SetContactAuth.php)             | nastavení autentizace
| [TestConnection.php](Examples/TestConnection.php)             | kontrola spojení

Příklady použití
-----------------

* [Flexplorer](https://github.com/VitexSoftware/Flexplorer) Vývojářský nástoj a editor záznamů
* [FlexiProXY](https://github.com/VitexSoftware/FlexiProxy) Modifikátor webového rozhraní AbraFlexi
* [Upomínač](https://github.com/VitexSoftware/php-abraflexi-reminder) Odesílač upomínek
* [Matcher](https://github.com/VitexSoftware/php-abraflexi-matcher) Párovač fakur
* [Redmine2AbraFlexi](https://github.com/VitexSoftware/Redmine2AbraFlexi) Generuje faktury z odpracovaného času v Redmine
* [FlexiPeeHP-Bricks](https://github.com/VitexSoftware/FlexiPeeHP-Bricks) Příklady a často požívaní třídy při práci s AbraFlexi
* [AbraFlexi Tools](https://github.com/VitexSoftware/AbraFlexi-Tools) Nástroje pro skriptování AbraFlexi z příkazové řádky

Reference
----------

* [Import dat z FAPI do AbraFlexi](https://flexibee.info/fapi2abraflexi/)  - blahasoft.cz
* [Import dat z iDokladu do AbraFlexi](https://flexibee.info/idoklad2abraflexi/) - blahasoft.cz

AbraFlexi knihovny pro další jazky
----------------------------------

* [Flexipy](https://github.com/JakubJecminek/flexipy)  (Python) [Dokumentace](http://pythonhosted.org/flexipy/index.html)
* [Flexibee.rb](https://github.com/danpecher/flexibee.rb) (Ruby)
* [UniMapper Flexibee extension](https://github.com/unimapper/flexibee) (PHP)
* [Flexibee client](https://github.com/ricco24/flexibee-client) (PHP)
* [flexibee-client](https://github.com/Ecomailcz/flexibee-client) (PHP)
* [flexibee-client](https://github.com/klemen/flexibee-client) (PHP)
* [Flexibee](https://github.com/adleritech/flexibee) (Java)

[Statistiky práce na projektu WakaTime](https://wakatime.com/@Vitex/projects/eftagqirep?start=2022-10-09&end=2022-10-15)
[Statistiky práce na projektu před přejmenováním](https://wakatime.com/@5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/projects/ypdqvdcmsg) (cca 250h)
