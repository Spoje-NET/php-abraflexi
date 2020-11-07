# PHP AbraFlexi
![PHP AbraFlexi Logo](project-logo.png?raw=true "Project Logo")

PHP7.1+ Based Library for easy interaction with Czech accounting system AbraFlexi.

CZ: PHP Knihovna pro snadnou práci s českým ekonomickým systémem [AbraFlexi](https://www.abraflexi.eu/)

[![Source Code](http://img.shields.io/badge/source/Spoje-NET/php-abraflexi-blue.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi)
[![Latest Version](https://img.shields.io/github/release/Spoje-NET/php-abraflexi.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/releases)
[![Software License](https://img.shields.io/badge/license-GNU-brightgreen.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/blob/master/LICENSE)
[![time tracker](https://wakatime.com/badge/github/Spoje-NET/php-abraflexi.svg)](https://wakatime.com/badge/github/Spoje-NET/php-abraflexi)
[![Build Status](https://img.shields.io/travis/Spoje-NET/php-abraflexi/master.svg?style=flat-square)](https://travis-ci.org/Spoje-NET/php-abraflexi)
[![Code Coverage](https://scrutinizer-ci.com/g/Spoje-NET/php-abraflexi/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Spoje-NET/php-abraflexi/?branch=master)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/flexipeehp.svg)](https://hub.docker.com/r/vitexsoftware/flexipeehp/)
[![Total Downloads](https://img.shields.io/packagist/dt/spoje.net/php-abraflexi.svg?style=flat-square)](https://packagist.org/packages/spoje.net/php-abraflexi)
[![Latest stable](https://img.shields.io/packagist/v/spoje.net/php-abraflexi.svg?style=flat-square)](https://packagist.org/packages/spoje.net/php-abraflexi)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4/big.png)](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4)

[![Latest Stable Version](https://poser.pugx.org/spojenet/abraflexi/v/stable)](https://packagist.org/packages/spojenet/abraflexi)
[![Total Downloads](https://poser.pugx.org/spojenet/abraflexi/downloads)](https://packagist.org/packages/spojenet/abraflexi)
[![Latest Unstable Version](https://poser.pugx.org/spojenet/abraflexi/v/unstable)](https://packagist.org/packages/spojenet/abraflexi)
[![License](https://poser.pugx.org/spojenet/abraflexi/license)](https://packagist.org/packages/spojenet/abraflexi)
[![Monthly Downloads](https://poser.pugx.org/spojenet/abraflexi/d/monthly)](https://packagist.org/packages/spojenet/abraflexi)
[![Daily Downloads](https://poser.pugx.org/spojenet/abraflexi/d/daily)](https://packagist.org/packages/spojenet/abraflexi)

 :exclamation: Tato knihovna byla z důvodu požadavků composeru 2.0+  přejmenována na **spojenet/abraflexi**  :exclamation:


# Poděkování 
Vznik této knihovny by nebyl možný bez laskavé podpory společnosti [Spoje.Net](http://www.spoje.net), 
která hradila vývoj řešení pro propojení LMS / AbraFlexi a importu skladu. :+1:

![Spoje.Net](https://github.com/Spoje-NET/php-abraflexi/raw/master/spoje-net_logo.gif "Spoje.Net")

**Dále chci poděkovat technické podpoře společnosti [ABRA Flexi s.r.o.](https://www.abraflexi.eu/podpora/) za jejich svatou trpělivost
při reakcích na mé ne vždy bystré otázky a bugreporty.**

Parsování výsledků pro účely GDPR logování bylo dopracováno za laskavé podpory [&lt;PureHTML&gt;](https://purehtml.cz/) 

Instalace
---------

    composer require spojenet/abraflexi


pokud váš výsledný composer.json bude vypadat  zhruba takto: 

```json
{
    "name": "vendor/projectname",
    "description": "Test",
    "type": "project",
    "require": {
        "spojenet/abraflexi": "*"
    },
    "license": "MIT",
    "authors": [
        {
            "name": "Vítězslav Dvořák",
            "email": "info@vitexsoftware.cz"
        }
    ],
    "minimum-stability": "stable"
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
    class MernaJednotka extends /AbraFlexi/AbraFlexi
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
https://demo.abraflexi.eu/c/demo/*/properties.json 
respektive https://demo.abraflexi.eu/c/demo/*/actions.json 
avšak jedná se o relativně časově náročné operace. Jelikož se struktura 
evidencí a Akce či vztahy mezi evidencemi AbraFlexi často nemění AbraFlexi 
disponuje mechanizmem který umožní pracovat s těmito údaji bez nutnosti 
dotazovat se na ně serveru. 

Struktura je uložena ve třídě Structure (Actions,Relations) která obsahuje 
staticky definované pole obsahující informace které by jinak bylo nutné získat
z AbraFlexi.

Položku v seznamu evidencí https://demo.abraflexi.eu/c/demo/evidence-list je pak 
možné kdykoliv snadno ukázat:

```php
    echo \AbraFlexi\Structure::$evidence['faktura-vydana'];
```

Sturktury jednotlivých evidencí jsou pak uloženy ve statických proměnných.
Jejich jméno se řídí stejnými pravidly jako jsou pro vytváření jména nové třídy
jen s tím rozdílem, že první písmeno je malé. Tzn.:

```php
    lcfirst(\AbraFlexi\RO::evidenceToClassName($evidence))
```

V případě potřeby je možné tyto třídy pak možné vygenerovat s aktuálním obsahem 
následujícím příkazem:

  ```
  cd tools/ 
  ./update_all.sh
  ```

Operace trvá několik minut. Zobrazit průběh můžeme takto:

  ```
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


Testování
---------

PHPUnit testy se nachází ve složce **testing**. Pokud chcete testovat proti jinému
serveru než je oficální http://demo.abraflexi.eu/ , je třeba změnit nastavení v 
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
            "Test\\": "vendor/spoje.net/php-abraflexi/testing/src/AbraFlexi/testing/",
            "Test\\Ease\\": "vendor/vitexsoftware/ease-core/tests/src/Ease",
            "Test\\AbraFlexi\\": "vendor/spoje.net/php-abraflexi/testing/src/AbraFlexi/",
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


Příklady použití:
-----------------

  * [Flexplorer](https://github.com/VitexSoftware/Flexplorer) Vývojářský nástoj a editor záznamů
  * [FlexiProXY](https://github.com/VitexSoftware/FlexiProxy) Modifikátor webového rozhraní AbraFlexi
  * [Upomínač](https://github.com/VitexSoftware/php-abraflexi-reminder) Odesílač upomínek
  * [Matcher](https://github.com/VitexSoftware/php-abraflexi-matcher) Párovač fakur
  * [Redmine2AbraFlexi](https://github.com/VitexSoftware/Redmine2AbraFlexi) Generuje faktury z odpracovaného času v Redmine
  * [FlexiPeeHP-Bricks](https://github.com/VitexSoftware/FlexiPeeHP-Bricks) Příklady a často požívaní třídy při práci s AbraFlexi
  * [TestingTools](https://github.com/VitexSoftware/AbraFlexi-TestingTools) Nástroje pro testování AbraFlexi aplikací


Reference:
----------

  * [Import dat z FAPI do AbraFlexi](https://abraflexi.info/fapi2abraflexi/)  - blahasoft.cz
  * [Import dat z iDokladu do AbraFlexi](https://abraflexi.info/idoklad2abraflexi/) - blahasoft.cz

Debian/Ubuntu
-------------

Pro Linux jsou k dispozici .deb balíčky. Prosím použijte repo:

```shell
sudo apt install lsb-release wget
echo "deb http://repo.vitexsoftware.cz $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/vitexsoftware.list
sudo wget -O /etc/apt/trusted.gpg.d/vitexsoftware.gpg http://repo.vitexsoftware.cz/keyring.gpg
sudo apt update
sudo apt install php-spojenet-abraflexi
```

V tomto případě je potřeba do souboru composer.json vaší aplikace přidat:

```json
    "require": {
        "deb/ease-core": "*",
        "deb/abraflexi": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/AbraFlexi",
            "options": {
                "symlink": true
            }
        },
        {
            "type": "path",
            "url": "/usr/share/php/EaseCore",
            "options": {
                "symlink": true
            }
        }
    ]
```

Takže při instalaci závislostí bude vypadat nějak takto:

    Loading composer repositories with package information
    Installing dependencies from lock file
      - Installing ease-framework (1.1.3.3)
        Symlinked from /usr/share/php/Ease

      - Installing flexipeehp (0.2.1)
        Symlinked from /usr/share/php/AbraFlexi

A aktualizaci bude možné dělat globálně pro celý systém prostřednictvím apt-get.

Generujeme také balíček **php-spojenet-abraflexi-doc**, obsahující vývojářskou dokumentaci
generovanou pomcí programu ApiGen. Dokumnentace je online k nahlédnutí na adrese
http://abraflexi-dev.spoje.net/php-abraflexi/

Testování:

     cd /usr/share/doc/AbraFlexi/
     composer install
     php -f abraflexiping.php


![Debian Test](https://github.com/Spoje-NET/php-abraflexi/raw/master/Examples/flexipeehp-debian-test.png "Test")
    

AbraFlexi knihovny pro další jazky:
----------------------------------

 * [Flexipy](https://github.com/JakubJecminek/flexipy)  (Python) [Dokumentace](http://pythonhosted.org/flexipy/index.html)
 * [Flexibee.rb](https://github.com/danpecher/flexibee.rb) (Ruby)
 * [UniMapper Flexibee extension](https://github.com/unimapper/flexibee) (PHP)
 * [Flexibee client](https://github.com/ricco24/flexibee-client) (PHP)
 * [flexibee-client](https://github.com/Ecomailcz/flexibee-client) (PHP)
 * [flexibee-client](https://github.com/klemen/flexibee-client) (PHP)
 * [Flexibee](https://github.com/adleritech/flexibee) (Java)
 
[Statistiky práce na projektu WakaTime](https://wakatime.com/@5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/projects/ypdqvdcmsg)
