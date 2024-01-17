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
    public static $version = '2024.1.2';

    /**
     * Evidence adresar (Adresy firem) Relations.
     *
     * @var array
     */
    public static $adresar = [
    'odberatele' => [
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
    ],
    'atributy' => [
    'url' => 'atributy',
    'evidenceType' => 'ATRIBUT',
    'name' => 'Atributy',
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
    public static $atribut = [
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
    public static $autotisk = [
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
    public static $banka = [
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
    'doklady-k-uhrade-bez-filtrovani-firmy' => [
    'url' => 'doklady-k-uhrade-bez-filtrovani-firmy',
    'evidenceType' => 'DOKLAD_K_UHRADE',
    'name' => 'Doklady faktur',
    ],
    ];
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Relations.
     *
     * @var array
     */
    public static $adresarBankovniUcet = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Relations.
     *
     * @var array
     */
    public static $mzdyBankovniSpojeni = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence bankovni-ucet-pokladna (Bankovní účty a pokladny) Relations.
     *
     * @var array
     */
    public static $bankovniUcetPokladna = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence bankovni-ucet-sklad-pokladna (Banky/pokladny/sklady) Relations.
     *
     * @var array
     */
    public static $bankovniUcetSkladPokladna = [
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
    public static $cenovaUroven = [
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
    public static $odberatel = [
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
    public static $cenik = [
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
    'typy-sazeb-dph' => [
    'url' => 'typy-sazeb-dph',
    'evidenceType' => 'TYP_SAZBY_DPH',
    'name' => 'Typy sazeb DPH',
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
    public static $cenikovaSkupina = [
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
    public static $certifikacniAutorita = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence certifikat (Certifikáty) Relations.
     *
     * @var array
     */
    public static $certifikat = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence danovy-naklad (Daňové náklady) Relations.
     *
     * @var array
     */
    public static $danovyNaklad = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence danovy-odpis (Daňové odpisy) Relations.
     *
     * @var array
     */
    public static $danovyOdpis = [
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
    public static $intrastatDodaciPodminky = [
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
    public static $dodavatelskaSmlouva = [
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
    public static $dodavatel = [
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
    public static $radaBanka = [
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
    public static $radaInternihoDokladu = [
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
    public static $radaPohledavky = [
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
    public static $radaPokladniPohyb = [
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
    public static $radaFakturyPrijate = [
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
    public static $radaNabidkyPrijate = [
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
    public static $radaObjednavkyPrijate = [
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
    public static $radaPoptavkyPrijate = [
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
    public static $radaSkladovyPohyb = [
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
    public static $radaFakturyVydane = [
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
    public static $radaNabidkyVydane = [
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
    public static $radaObjednavkyVydane = [
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
    public static $radaPoptavkyVydane = [
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
    public static $radaZavazku = [
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
    public static $dokladKUhrade = [
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
    public static $intrastatDruhDopravy = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence dite (Dítě) Relations.
     *
     * @var array
     */
    public static $dite = [
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
    public static $cenikObal = [
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
    public static $formaDopravy = [
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
    public static $formaUhrady = [
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
     * Evidence osoba-hlavicka (Hlavičky osob) Relations.
     *
     * @var array
     */
    public static $osobaHlavicka = [
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
    ];
    /**
     * Evidence insight (Insight) Relations.
     *
     * @var array
     */
    public static $insight = [
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
    public static $interniDoklad = [
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
    public static $inventura = [
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
     * Evidence certifikat-finbricks (Klíče Finbricks) Relations.
     *
     * @var array
     */
    public static $certifikatFinbricks = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     *
     * @var array
     */
    public static $konstSymbol = [
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
    public static $kontakt = [
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
    public static $intrastatKrajUrceni = [
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
    public static $kurz = [
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
    public static $intrastatKurz = [
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
    public static $kurzProCenotvorbu = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence kurz-pro-preceneni (Kurzy pro přecenění) Relations.
     *
     * @var array
     */
    public static $kurzProPreceneni = [
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
    public static $kusovnik = [
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
    public static $intrastatKodNomenklatury = [
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
    public static $leasing = [
    'splatkove-kalendare' => [
    'url' => 'splatkove-kalendare',
    'evidenceType' => 'SPLATKOVY_KALENDAR',
    'name' => 'Splátkový kalendář',
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
    'danove-naklady' => [
    'url' => 'danove-naklady',
    'evidenceType' => 'DANOVY_NAKLAD',
    'name' => 'Daňové náklady',
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
    public static $majetek = [
    'danove-odpisy' => [
    'url' => 'danove-odpisy',
    'evidenceType' => 'DANOVY_ODPIS',
    'name' => 'Daňové odpisy',
    ],
    'prilohy' => [
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
    ],
    'ucetni-odpisy' => [
    'url' => 'ucetni-odpisy',
    'evidenceType' => 'UCETNI_ODPIS',
    'name' => 'Účetní odpisy',
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
    public static $mapovaniSkladu = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Relations.
     *
     * @var array
     */
    public static $mzdovaSlozka = [
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
    public static $mistoUrceni = [
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
    public static $mena = [
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
    public static $intrastatMernaJednotka = [
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
    public static $mernaJednotka = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence nepritomnost (Nepřítomnost) Relations.
     *
     * @var array
     */
    public static $nepritomnost = [
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
    public static $naklad = [
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
    public static $intrastatObchodniTransakce = [
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
    public static $smlouva = [
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
    public static $odpisovaSkupina = [
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
    public static $uzivatel = [
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
    public static $pohledavka = [
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
    public static $zavazek = [
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
    public static $uzivatelskyDotazParametr = [
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
    public static $penezniUstav = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence osoba (Personalistika) Relations.
     *
     * @var array
     */
    public static $osoba = [
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
    ];
    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     *
     * @var array
     */
    public static $podobneZbozi = [
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
    public static $pokladniPohyb = [
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
    'doklady-k-uhrade-bez-filtrovani-firmy' => [
    'url' => 'doklady-k-uhrade-bez-filtrovani-firmy',
    'evidenceType' => 'DOKLAD_K_UHRADE',
    'name' => 'Doklady faktur',
    ],
    ];
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Relations.
     *
     * @var array
     */
    public static $parametr = [
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
    public static $prikazKInkasuPolozka = [
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
    public static $prikazKUhradePolozka = [
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
    public static $interniDokladPolozka = [
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
    public static $inventuraPolozka = [
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
    public static $pohledavkaPolozka = [
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
    public static $zavazekPolozka = [
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
    public static $pokladniPohybPolozka = [
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
    public static $nabidkaPrijataPolozka = [
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
    public static $objednavkaPrijataPolozka = [
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
    public static $fakturaPrijataPolozka = [
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
    public static $poptavkaPrijataPolozka = [
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
    public static $skladovyPohybPolozka = [
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
    public static $smlouvaPolozka = [
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
    public static $nabidkaVydanaPolozka = [
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
    public static $objednavkaVydanaPolozka = [
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
    public static $poptavkaVydanaPolozka = [
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
    public static $fakturaVydanaPolozka = [
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
    public static $bankaPolozka = [
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
    public static $poplatek = [
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
    public static $psc = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Relations.
     *
     * @var array
     */
    public static $pracovniPomer = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Relations.
     *
     * @var array
     */
    public static $pracovniPomerHlavicka = [
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
    public static $prodejka = [
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
    'formy-uhrad' => [
    'url' => 'formy-uhrad',
    'evidenceType' => 'FORMA_UHRADY',
    'name' => 'Forma úhrady',
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
     * Evidence prace (Práce pro střediska) Relations.
     *
     * @var array
     */
    public static $prace = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence prace-mesic (Práce pro střediska) Relations.
     *
     * @var array
     */
    public static $praceMesic = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence text (Předdefinované texty) Relations.
     *
     * @var array
     */
    public static $text = [
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
    public static $predpisZauctovani = [
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
    public static $fakturaPrijata = [
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
    public static $nabidkaPrijata = [
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
    public static $objednavkaPrijata = [
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
    public static $poptavkaPrijata = [
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
    public static $skladovyPohyb = [
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
    public static $prikazKInkasu = [
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
    public static $prikazKUhrade = [
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
    public static $priloha = [
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
    public static $prislustenstvi = [
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
    public static $rezervace = [
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
    public static $rocniRada = [
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
    public static $sadyAKomplety = [
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
    public static $sazbaDph = [
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
    public static $dashboardSharing = [
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
    public static $bankovniUcet = [
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
    public static $pokladna = [
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
    public static $typProdejky = [
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
    public static $sestava = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    'pricteni-rozdilu' => [
    'url' => 'pricteni-rozdilu',
    'evidenceType' => 'PRICTENI_ROZDILU',
    'name' => 'Řádky pro přičtení rozdílu',
    ],
    'umisteni-uctu' => [
    'url' => 'umisteni-uctu',
    'evidenceType' => 'UMISTENI_UCTU',
    'name' => 'Upřesnění umístění účtu',
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
    public static $sklad = [
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
    public static $preneseniDph = [
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
    public static $skladovaKarta = [
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
    public static $skupinaAtributu = [
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
    public static $skupinaFirem = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence skupina-osob (Skupiny osob) Relations.
     *
     * @var array
     */
    public static $skupinaOsob = [
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
    public static $skupinaZbozi = [
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
    public static $skupinaStitku = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence smena (Směny) Relations.
     *
     * @var array
     */
    public static $smena = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence splatkovy-kalendar (Splátkový kalendář) Relations.
     *
     * @var array
     */
    public static $splatkovyKalendar = [
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
    public static $dashboardPanel = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence srazka (Srážka) Relations.
     *
     * @var array
     */
    public static $srazka = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence standardni-predpis (Standardní předpis sestavy) Relations.
     *
     * @var array
     */
    public static $standardniPredpis = [
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
    public static $ucetniOsnova = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence stav-obchodniho-dokladu (Stav obchodního dokladu) Relations.
     *
     * @var array
     */
    public static $stavObchodnihoDokladu = [
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
    public static $stavSmlouvy = [
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
    public static $stavZakazky = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Relations.
     *
     * @var array
     */
    public static $stalaMzdovaSlozka = [
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
    public static $stat = [
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
    public static $stredisko = [
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
    public static $subjekt = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence sumace-sestavy (Sumace v sestavách) Relations.
     *
     * @var array
     */
    public static $sumaceSestavy = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Relations.
     *
     * @var array
     */
    public static $typPracovnihoPomeru = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence cenik-typ-sazby-dph (Typ sazby DPH) Relations.
     *
     * @var array
     */
    public static $cenikTypSazbyDph = [
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
    public static $typAtributu = [
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
    public static $typBanka = [
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
    public static $dodavatelskyTypSmlouvy = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence typ-dokladu (Typy dokladů) Relations.
     *
     * @var array
     */
    public static $typDokladu = [
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
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Relations.
     *
     * @var array
     */
    public static $typInternihoDokladu = [
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
    public static $typLeasingu = [
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
    public static $typMajetku = [
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
    public static $typNakladu = [
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
    public static $typSmlouvy = [
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
    public static $typPohledavky = [
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
    public static $typZavazku = [
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
    public static $typPokladniPohyb = [
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
    public static $typFakturyPrijate = [
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
    public static $typNabidkyPrijate = [
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
    public static $typObjednavkyPrijate = [
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
    public static $typPoptavkyPrijate = [
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
    public static $typSkladovyPohyb = [
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
    public static $typAktivity = [
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
    public static $typUzivatelskeVazby = [
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
    public static $typFakturyVydane = [
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
    public static $typNabidkyVydane = [
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
    public static $typObjednavkyVydane = [
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
    public static $typPoptavkyVydane = [
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
    public static $typZakazky = [
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
    public static $typVzajemnychZapoctu = [
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
    public static $majetekUdalost = [
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
    public static $udalost = [
    'osoby' => [
    'url' => 'osoby',
    'evidenceType' => 'UZIVATELE',
    'name' => 'Uživatelé',
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
     * Evidence ulozene-priznani-dph (Uložené přiznání DPH) Relations.
     *
     * @var array
     */
    public static $ulozenePriznaniDph = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Relations.
     *
     * @var array
     */
    public static $radekPriznaniDph = [
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
    public static $umisteni = [
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
    public static $umisteniVeSkladu = [
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
    public static $umisteniVeSkladuRegal = [
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
    public static $umisteniVeSkladuPolice = [
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
    public static $umisteniVeSkladuMistnost = [
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
    public static $sablonaUpominky = [
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
    public static $strom = [
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
    public static $uzivatelskyDotaz = [
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
    public static $sablonaMail = [
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
    public static $filtr = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence report (Uživatelské reporty) Relations.
     *
     * @var array
     */
    public static $report = [
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
     * Evidence role (Uživatelské role) Relations.
     *
     * @var array
     */
    public static $role = [
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
    public static $customButton = [
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
    public static $xslt = [
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
    public static $uzivatelskyDotazVlastnost = [
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
    public static $fakturaVydana = [
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
    public static $nabidkaVydana = [
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
    public static $objednavkaVydana = [
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
    public static $poptavkaVydana = [
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
    public static $hodnoceniZakazky = [
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
    public static $vzajemnyZapocet = [
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
    public static $zakazka = [
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
     * Evidence zamek (Zamykání období) Relations.
     *
     * @var array
     */
    public static $zamek = [
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
    public static $formaUhradyZauctovani = [
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
    public static $intrastatZvlastniPohyb = [
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
    public static $zapujcka = [
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
    public static $rada = [
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
     * Evidence ucetni-odpis (Účetní odpisy) Relations.
     *
     * @var array
     */
    public static $ucetniOdpis = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     *
     * @var array
     */
    public static $ucet = [
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
    public static $cinnost = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Relations.
     *
     * @var array
     */
    public static $ciselnikMzdovychSlozek = [
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
    public static $typStavuCeniku = [
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
    public static $stavCeniku = [
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
    public static $cisloBaliku = [
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
    public static $radekSestavy = [
    'stdPredpisy' => [
    'url' => 'stdPredpisy',
    'evidenceType' => 'STD_PREDPIS_SESTAVY',
    'name' => 'Standardní předpis sestavy',
    ],
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    'sumace' => [
    'url' => 'sumace',
    'evidenceType' => 'SUMACE_SESTAVY',
    'name' => 'Sumace v sestavách',
    ],
    ];
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Relations.
     *
     * @var array
     */
    public static $cleneniKontrolniHlaseni = [
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
    public static $cleneniDph = [
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
    public static $stitek = [
    'uzivatelske-vazby' => [
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
    ],
    ];
}
