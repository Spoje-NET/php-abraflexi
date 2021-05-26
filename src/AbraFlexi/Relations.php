<?php
/**
 * AbraFlexi - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Evidence Relations
 *
 * @link https://demo.flexibee.eu/devdoc/relations Provádění akcí
 */

class Relations
{
    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 static public $version = '2021.5.3';

    /**
     * Evidence adresar (Adresy firem) Relations.
     *
     * @var array
     */
 static public $adresar = [
  'odberatele' => [
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ],
  'bankovniSpojeni' => [
    'url' => 'bankovniSpojeni',
    'evidenceType' => 'ADR_BANKOVNI_UCET',
    'name' => 'Bankovní spojení',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'cenHladiny' => [
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ],
  'smlouvy' => [
    'url' => 'smlouvy',
    'evidenceType' => 'SMLOUVA',
    'name' => 'Smlouvy',
  ],
  'dodavatele' => [
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ],
  'mistaUrceni' => [
    'url' => 'mistaUrceni',
    'evidenceType' => 'MISTO_URCENI',
    'name' => 'Místa určení',
  ],
  'rezervace' => [
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ],
  'kontakty' => [
    'url' => 'kontakty',
    'evidenceType' => 'ADR_KONTAKT',
    'name' => 'Kontakty',
  ],
];
    /**
     * Evidence atribut (Atributy) Relations.
     *
     * @var array
     */
 static public $atribut = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence autotisk (Automatický tisk) Relations.
     *
     * @var array
     */
 static public $autotisk = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence banka (Banka) Relations.
     *
     * @var array
     */
 static public $banka = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
  'doklady-k-uhrade' => [
    'url' => 'doklady-k-uhrade',
    'evidenceType' => 'DOKLAD_K_UHRADE',
    'name' => 'Doklady faktur',
  ],
];
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Relations.
     *
     * @var array
     */
 static public $adresarBankovniUcet = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cenova-uroven (Cenové úrovně) Relations.
     *
     * @var array
     */
 static public $cenovaUroven = [
  'firmy' => [
    'url' => 'firmy',
    'evidenceType' => 'ADRESAR',
    'name' => 'Adresář',
  ],
  'skupinyCen' => [
    'url' => 'skupinyCen',
    'evidenceType' => 'CENIKOVA_SKUPINA',
    'name' => 'Ceníkové skupiny',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'ceniky' => [
    'url' => 'ceniky',
    'evidenceType' => 'CENIK',
    'name' => 'Ceníky',
  ],
  'skupinyZbozi' => [
    'url' => 'skupinyZbozi',
    'evidenceType' => 'SKUPINA_ZBOZI',
    'name' => 'Skupiny zboží',
  ],
];
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Relations.
     *
     * @var array
     */
 static public $odberatel = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cenik (Ceník) Relations.
     *
     * @var array
     */
 static public $cenik = [
  'odberatele' => [
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ],
  'cenik-obaly' => [
    'url' => 'cenik-obaly',
    'evidenceType' => 'CENIK_OBAL',
    'name' => 'Evidence obalů EkoKom',
  ],
  'atributy' => [
    'url' => 'atributy',
    'evidenceType' => 'ATRIBUT',
    'name' => 'Atributy',
  ],
  'sklad-karty' => [
    'url' => 'sklad-karty',
    'evidenceType' => 'SKLADOVA_KARTA',
    'name' => 'Skladová karta',
  ],
  'sady-a-komplety' => [
    'url' => 'sady-a-komplety',
    'evidenceType' => 'SADY_A_KOMPLETY',
    'name' => 'Sady a komplety',
  ],
  'prislustenstvi' => [
    'url' => 'prislustenstvi',
    'evidenceType' => 'PRISLUSENSTVI',
    'name' => 'Příslušenství',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'poplatky' => [
    'url' => 'poplatky',
    'evidenceType' => 'POPLATKY',
    'name' => 'Poplatky',
  ],
  'dodavatele' => [
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ],
  'vyrobni-cisla' => [
    'url' => 'vyrobni-cisla',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
  'stavy' => [
    'url' => 'stavy',
    'evidenceType' => 'STAV_CENIKU',
    'name' => 'Stavy položky ceníku',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'podobne-zbozi' => [
    'url' => 'podobne-zbozi',
    'evidenceType' => 'PODOBNE_ZBOZI',
    'name' => 'Podobné zboží',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'cenHladiny' => [
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ],
  'rezervace' => [
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ],
];
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Relations.
     *
     * @var array
     */
 static public $cenikovaSkupina = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Relations.
     *
     * @var array
     */
 static public $certifikacniAutorita = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Relations.
     *
     * @var array
     */
 static public $intrastatDodaciPodminky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Relations.
     *
     * @var array
     */
 static public $dodavatelskaSmlouva = [
  'polozkySmlouvy' => [
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ],
  'polozkySmlouvyExt' => [
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence dodavatel (Dodavatelé) Relations.
     *
     * @var array
     */
 static public $dodavatel = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Relations.
     *
     * @var array
     */
 static public $radaBanka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Relations.
     *
     * @var array
     */
 static public $radaInternihoDokladu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Relations.
     *
     * @var array
     */
 static public $radaPohledavky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Relations.
     *
     * @var array
     */
 static public $radaPokladniPohyb = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Relations.
     *
     * @var array
     */
 static public $radaFakturyPrijate = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $radaNabidkyPrijate = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $radaObjednavkyPrijate = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Relations.
     *
     * @var array
     */
 static public $radaPoptavkyPrijate = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Relations.
     *
     * @var array
     */
 static public $radaSkladovyPohyb = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Relations.
     *
     * @var array
     */
 static public $radaFakturyVydane = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Relations.
     *
     * @var array
     */
 static public $radaNabidkyVydane = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Relations.
     *
     * @var array
     */
 static public $radaObjednavkyVydane = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Relations.
     *
     * @var array
     */
 static public $radaPoptavkyVydane = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Relations.
     *
     * @var array
     */
 static public $radaZavazku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence doklad-k-uhrade (Doklady k úhradě) Relations.
     *
     * @var array
     */
 static public $dokladKUhrade = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Relations.
     *
     * @var array
     */
 static public $intrastatDruhDopravy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence certifikat-eet (EET certifikáty) Relations.
     *
     * @var array
     */
 static public $certifikatEet = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Relations.
     *
     * @var array
     */
 static public $cenikObal = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence forma-dopravy (Formy dopravy) Relations.
     *
     * @var array
     */
 static public $formaDopravy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence forma-uhrady (Formy úhrady) Relations.
     *
     * @var array
     */
 static public $formaUhrady = [
  'zauctovani' => [
    'url' => 'zauctovani',
    'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
    'name' => 'Zaúčtování',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence insight (Insight) Relations.
     *
     * @var array
     */
 static public $insight = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence interni-doklad (Interní doklady) Relations.
     *
     * @var array
     */
 static public $interniDoklad = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
    'name' => 'Položky interního dokladu',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence inventura (Inventury) Relations.
     *
     * @var array
     */
 static public $inventura = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'inventura-polozky' => [
    'url' => 'inventura-polozky',
    'evidenceType' => 'INVENTURA_POLOZKA',
    'name' => 'Položka inventury',
  ],
];
    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     *
     * @var array
     */
 static public $konstSymbol = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence kontakt (Kontakty) Relations.
     *
     * @var array
     */
 static public $kontakt = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Relations.
     *
     * @var array
     */
 static public $intrastatKrajUrceni = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence kurz (Kurzy) Relations.
     *
     * @var array
     */
 static public $kurz = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Relations.
     *
     * @var array
     */
 static public $intrastatKurz = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Relations.
     *
     * @var array
     */
 static public $kurzProCenotvorbu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence kusovnik (Kusovník) Relations.
     *
     * @var array
     */
 static public $kusovnik = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Relations.
     *
     * @var array
     */
 static public $intrastatKodNomenklatury = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence leasing (Leasing) Relations.
     *
     * @var array
     */
 static public $leasing = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'zapujcky' => [
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ],
];
    /**
     * Evidence majetek (Majetek) Relations.
     *
     * @var array
     */
 static public $majetek = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'majetek-udalosti' => [
    'url' => 'majetek-udalosti',
    'evidenceType' => 'MAJETEK_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'zapujcky' => [
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ],
];
    /**
     * Evidence mapovani-skladu (Mapování skladů) Relations.
     *
     * @var array
     */
 static public $mapovaniSkladu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence misto-urceni (Místa určení) Relations.
     *
     * @var array
     */
 static public $mistoUrceni = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence mena (Měny) Relations.
     *
     * @var array
     */
 static public $mena = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'kurzy' => [
    'url' => 'kurzy',
    'evidenceType' => 'KURZ',
    'name' => 'Kurzy',
  ],
];
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Relations.
     *
     * @var array
     */
 static public $intrastatMernaJednotka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Relations.
     *
     * @var array
     */
 static public $mernaJednotka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence naklad (Náklady na události / aktivity) Relations.
     *
     * @var array
     */
 static public $naklad = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Relations.
     *
     * @var array
     */
 static public $intrastatObchodniTransakce = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence smlouva (Odběratelské smlouvy) Relations.
     *
     * @var array
     */
 static public $smlouva = [
  'polozkySmlouvy' => [
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ],
  'polozkySmlouvyExt' => [
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Relations.
     *
     * @var array
     */
 static public $odpisovaSkupina = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence uzivatel (Osoby a uživatelé) Relations.
     *
     * @var array
     */
 static public $uzivatel = [
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence pohledavka (Ostatní pohledávky) Relations.
     *
     * @var array
     */
 static public $pohledavka = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POHLEDAVKA_POLOZKA',
    'name' => 'Položky faktur',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence zavazek (Ostatní závazky) Relations.
     *
     * @var array
     */
 static public $zavazek = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'ZAVAZEK_POLOZKA',
    'name' => 'Položky faktur',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotazParametr = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Relations.
     *
     * @var array
     */
 static public $penezniUstav = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     *
     * @var array
     */
 static public $podobneZbozi = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence pokladni-pohyb (Pokladna) Relations.
     *
     * @var array
     */
 static public $pokladniPohyb = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
    'name' => 'Položky pokladního dokladu',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
  'doklady-k-uhrade' => [
    'url' => 'doklady-k-uhrade',
    'evidenceType' => 'DOKLAD_K_UHRADE',
    'name' => 'Doklady faktur',
  ],
];
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Relations.
     *
     * @var array
     */
 static public $parametr = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Relations.
     *
     * @var array
     */
 static public $prikazKInkasuPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Relations.
     *
     * @var array
     */
 static public $prikazKUhradePolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Relations.
     *
     * @var array
     */
 static public $interniDokladPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence inventura-polozka (Položky inventur) Relations.
     *
     * @var array
     */
 static public $inventuraPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Relations.
     *
     * @var array
     */
 static public $pohledavkaPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Relations.
     *
     * @var array
     */
 static public $zavazekPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Relations.
     *
     * @var array
     */
 static public $pokladniPohybPolozka = [
  'vyrobniCislaVydana' => [
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vyrobniCislaPrijata' => [
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
];
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaPrijataPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaPrijataPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Relations.
     *
     * @var array
     */
 static public $fakturaPrijataPolozka = [
  'vyrobniCislaVydana' => [
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vyrobniCislaPrijata' => [
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
];
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Relations.
     *
     * @var array
     */
 static public $poptavkaPrijataPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Relations.
     *
     * @var array
     */
 static public $skladovyPohybPolozka = [
  'vyrobniCislaVydana' => [
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vyrobniCislaPrijata' => [
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
];
    /**
     * Evidence smlouva-polozka (Položky smluv) Relations.
     *
     * @var array
     */
 static public $smlouvaPolozka = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaVydanaPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaVydanaPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaVydanaPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Relations.
     *
     * @var array
     */
 static public $fakturaVydanaPolozka = [
  'vyrobniCislaVydana' => [
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vyrobniCislaPrijata' => [
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ],
];
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Relations.
     *
     * @var array
     */
 static public $bankaPolozka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence poplatek (Poplatky) Relations.
     *
     * @var array
     */
 static public $poplatek = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence psc (Poštovní směrovací čísla) Relations.
     *
     * @var array
     */
 static public $psc = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence prodejka (Prodejní kasa) Relations.
     *
     * @var array
     */
 static public $prodejka = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence text (Předdefinované texty) Relations.
     *
     * @var array
     */
 static public $text = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Relations.
     *
     * @var array
     */
 static public $predpisZauctovani = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence faktura-prijata (Přijaté faktury) Relations.
     *
     * @var array
     */
 static public $fakturaPrijata = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_IN_POLOZKA',
    'name' => 'Položky faktur',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaPrijata = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_IN_POLOZKA',
    'name' => 'Položky nabídky přijaté',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaPrijata = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
    'name' => 'Položky objednávky přijaté',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaPrijata = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_IN_POLOZKA',
    'name' => 'Položky poptávky přijaté',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Relations.
     *
     * @var array
     */
 static public $skladovyPohyb = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Relations.
     *
     * @var array
     */
 static public $prikazKInkasu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozky' => [
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_INKASU_POLOZKA',
    'name' => 'Položky',
  ],
];
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Relations.
     *
     * @var array
     */
 static public $prikazKUhrade = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozky' => [
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'name' => 'Položky',
  ],
];
    /**
     * Evidence priloha (Příloha) Relations.
     *
     * @var array
     */
 static public $priloha = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence prislustenstvi (Příslušenství) Relations.
     *
     * @var array
     */
 static public $prislustenstvi = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence rezervace (Rezervace) Relations.
     *
     * @var array
     */
 static public $rezervace = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Relations.
     *
     * @var array
     */
 static public $rocniRada = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence sady-a-komplety (Sady) Relations.
     *
     * @var array
     */
 static public $sadyAKomplety = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence sazba-dph (Sazby DPH) Relations.
     *
     * @var array
     */
 static public $sazbaDph = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Relations.
     *
     * @var array
     */
 static public $dashboardSharing = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Relations.
     *
     * @var array
     */
 static public $bankovniUcet = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence pokladna (Seznam pokladen) Relations.
     *
     * @var array
     */
 static public $pokladna = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Relations.
     *
     * @var array
     */
 static public $typProdejky = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence sestava (Seznam sestav) Relations.
     *
     * @var array
     */
 static public $sestava = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'radkySestavy' => [
    'url' => 'radkySestavy',
    'evidenceType' => 'RADEK_SESTAVY',
    'name' => 'Řádky sestavy',
  ],
];
    /**
     * Evidence sklad (Seznam skladů) Relations.
     *
     * @var array
     */
 static public $sklad = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Relations.
     *
     * @var array
     */
 static public $preneseniDph = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence skladova-karta (Skladové karty) Relations.
     *
     * @var array
     */
 static public $skladovaKarta = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'skladovy-pohyb-polozky' => [
    'url' => 'skladovy-pohyb-polozky',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ],
];
    /**
     * Evidence skupina-atributu (Skupiny atributů) Relations.
     *
     * @var array
     */
 static public $skupinaAtributu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence skupina-firem (Skupiny firem) Relations.
     *
     * @var array
     */
 static public $skupinaFirem = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Relations.
     *
     * @var array
     */
 static public $skupinaZbozi = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence skupina-stitku (Skupiny štítků) Relations.
     *
     * @var array
     */
 static public $skupinaStitku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence dashboard-panel (Správa přehledů) Relations.
     *
     * @var array
     */
 static public $dashboardPanel = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Relations.
     *
     * @var array
     */
 static public $ucetniOsnova = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence stav-smlouvy (Stavy smluv) Relations.
     *
     * @var array
     */
 static public $stavSmlouvy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence stav-zakazky (Stavy zakázek) Relations.
     *
     * @var array
     */
 static public $stavZakazky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence stat (Státy) Relations.
     *
     * @var array
     */
 static public $stat = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence stredisko (Střediska) Relations.
     *
     * @var array
     */
 static public $stredisko = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence subjekt (Subjekt) Relations.
     *
     * @var array
     */
 static public $subjekt = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-atributu (Typy atributů) Relations.
     *
     * @var array
     */
 static public $typAtributu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Relations.
     *
     * @var array
     */
 static public $typBanka = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Relations.
     *
     * @var array
     */
 static public $dodavatelskyTypSmlouvy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Relations.
     *
     * @var array
     */
 static public $typInternihoDokladu = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-leasingu (Typy leasingů) Relations.
     *
     * @var array
     */
 static public $typLeasingu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-majetku (Typy majetků) Relations.
     *
     * @var array
     */
 static public $typMajetku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Relations.
     *
     * @var array
     */
 static public $typNakladu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Relations.
     *
     * @var array
     */
 static public $typSmlouvy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Relations.
     *
     * @var array
     */
 static public $typPohledavky = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Relations.
     *
     * @var array
     */
 static public $typZavazku = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Relations.
     *
     * @var array
     */
 static public $typPokladniPohyb = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Relations.
     *
     * @var array
     */
 static public $typFakturyPrijate = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Relations.
     *
     * @var array
     */
 static public $typNabidkyPrijate = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Relations.
     *
     * @var array
     */
 static public $typObjednavkyPrijate = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Relations.
     *
     * @var array
     */
 static public $typPoptavkyPrijate = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Relations.
     *
     * @var array
     */
 static public $typSkladovyPohyb = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Relations.
     *
     * @var array
     */
 static public $typAktivity = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Relations.
     *
     * @var array
     */
 static public $typUzivatelskeVazby = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Relations.
     *
     * @var array
     */
 static public $typFakturyVydane = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Relations.
     *
     * @var array
     */
 static public $typNabidkyVydane = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Relations.
     *
     * @var array
     */
 static public $typObjednavkyVydane = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Relations.
     *
     * @var array
     */
 static public $typPoptavkyVydane = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-zakazky (Typy zakázek) Relations.
     *
     * @var array
     */
 static public $typZakazky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Relations.
     *
     * @var array
     */
 static public $typVzajemnychZapoctu = [
  'autoTisky' => [
    'url' => 'autoTisky',
    'evidenceType' => 'AUTOTISK',
    'name' => 'Automatický tisk',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence majetek-udalost (Události) Relations.
     *
     * @var array
     */
 static public $majetekUdalost = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence udalost (Události, aktivity) Relations.
     *
     * @var array
     */
 static public $udalost = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'naklady' => [
    'url' => 'naklady',
    'evidenceType' => 'NAKLAD',
    'name' => 'Náklady aktivity',
  ],
  'kontakty' => [
    'url' => 'kontakty',
    'evidenceType' => 'ADR_KONTAKT',
    'name' => 'Kontakty',
  ],
];
    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Relations.
     *
     * @var array
     */
 static public $radekPriznaniDph = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence umisteni (Umístění) Relations.
     *
     * @var array
     */
 static public $umisteni = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladu = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuRegal = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuPolice = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuMistnost = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence sablona-upominky (Upomínky) Relations.
     *
     * @var array
     */
 static public $sablonaUpominky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence strom (Uzel stromu) Relations.
     *
     * @var array
     */
 static public $strom = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotaz = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'params' => [
    'url' => 'params',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
    'name' => 'Parametry',
  ],
  'props' => [
    'url' => 'props',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
    'name' => 'Vlastnosti',
  ],
];
    /**
     * Evidence sablona-mail (Uživatelské e-mailové šablony) Relations.
     *
     * @var array
     */
 static public $sablonaMail = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence filtr (Uživatelské filtry) Relations.
     *
     * @var array
     */
 static public $filtr = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence custom-button (Uživatelské tlačítko) Relations.
     *
     * @var array
     */
 static public $customButton = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence xslt (Uživatelské transformace) Relations.
     *
     * @var array
     */
 static public $xslt = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotazVlastnost = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence faktura-vydana (Vydané faktury) Relations.
     *
     * @var array
     */
 static public $fakturaVydana = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaVydana = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_OUT_POLOZKA',
    'name' => 'Položky nabídky vydané',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaVydana = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
    'name' => 'Položky objednávky vydané',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaVydana = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
    'name' => 'Položky poptávky vydané',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Relations.
     *
     * @var array
     */
 static public $hodnoceniZakazky = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Relations.
     *
     * @var array
     */
 static public $vzajemnyZapocet = [
  'vazebni-doklady' => [
    'url' => 'vazebni-doklady',
    'evidenceType' => 'VAZEBNI_DOKLAD',
    'name' => 'Navázané doklady',
  ],
  'polozkyDokladu' => [
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ],
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'vazby' => [
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ],
];
    /**
     * Evidence zakazka (Zakázky) Relations.
     *
     * @var array
     */
 static public $zakazka = [
  'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ],
  'udalosti' => [
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ],
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Relations.
     *
     * @var array
     */
 static public $formaUhradyZauctovani = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Relations.
     *
     * @var array
     */
 static public $intrastatZvlastniPohyb = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence zapujcka (Zápůjčky) Relations.
     *
     * @var array
     */
 static public $zapujcka = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence rada (dokladové řady) Relations.
     *
     * @var array
     */
 static public $rada = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'polozkyRady' => [
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ],
];
    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     *
     * @var array
     */
 static public $ucet = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cinnost (Činnost) Relations.
     *
     * @var array
     */
 static public $cinnost = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 static public $typStavuCeniku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'ceniky' => [
    'url' => 'ceniky',
    'evidenceType' => 'CENIK',
    'name' => 'Ceníky',
  ],
];
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 static public $stavCeniku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
  'ceniky' => [
    'url' => 'ceniky',
    'evidenceType' => 'CENIK',
    'name' => 'Ceníky',
  ],
];
    /**
     * Evidence cislo-baliku (Čísla balíků) Relations.
     *
     * @var array
     */
 static public $cisloBaliku = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence radek-sestavy (Řádek sestavy) Relations.
     *
     * @var array
     */
 static public $radekSestavy = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Relations.
     *
     * @var array
     */
 static public $cleneniKontrolniHlaseni = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Relations.
     *
     * @var array
     */
 static public $cleneniDph = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
    /**
     * Evidence stitek (Štítky) Relations.
     *
     * @var array
     */
 static public $stitek = [
  'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ],
];
}
