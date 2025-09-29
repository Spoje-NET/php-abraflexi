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

namespace AbraFlexi;

/**
 * Evidence Relations.
 *
 * @see https://demo.flexibee.eu/devdoc/relations Provádění akcí
 */
class Relations
{
    /**
     * Source FlexiBee server version.
     */
    public static string $version = '2024.7.1';

    /**
     * Evidence adresar (Adresy firem) Relations.
     */
    public static array $adresar = [
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
        'prilohy' => [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
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
        'kontakty' => [
            'url' => 'kontakty',
            'evidenceType' => 'ADR_KONTAKT',
            'name' => 'Kontakty',
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
        'cenHladiny' => [
            'url' => 'cenHladiny',
            'evidenceType' => 'CENOVA_UROVEN',
            'name' => 'Cenové úrovně',
        ],
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
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
    ];

    /**
     * Evidence atribut (Atributy) Relations.
     */
    public static array $atribut = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence autotisk (Automatický tisk) Relations.
     */
    public static array $autotisk = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence banka (Banka) Relations.
     */
    public static array $banka = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
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
     */
    public static array $adresarBankovniUcet = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Relations.
     */
    public static array $mzdyBankovniSpojeni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence bankovni-ucet-pokladna (Bankovní účty a pokladny) Relations.
     */
    public static array $bankovniUcetPokladna = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence bankovni-ucet-sklad-pokladna (Banky/pokladny/sklady) Relations.
     */
    public static array $bankovniUcetSkladPokladna = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cenova-uroven (Cenové úrovně) Relations.
     */
    public static array $cenovaUroven = [
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
     */
    public static array $odberatel = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cenik (Ceník) Relations.
     */
    public static array $cenik = [
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
     */
    public static array $cenikovaSkupina = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence certifikacni-autorita (Certifikační autority) Relations.
     */
    public static array $certifikacniAutorita = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence certifikat (Certifikáty) Relations.
     */
    public static array $certifikat = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence danovy-naklad (Daňové náklady) Relations.
     */
    public static array $danovyNaklad = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence danovy-odpis (Daňové odpisy) Relations.
     */
    public static array $danovyOdpis = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Relations.
     */
    public static array $intrastatDodaciPodminky = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Relations.
     */
    public static array $dodavatelskaSmlouva = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence dodavatel (Dodavatelé) Relations.
     */
    public static array $dodavatel = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Relations.
     */
    public static array $radaBanka = [
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
     */
    public static array $radaInternihoDokladu = [
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
     */
    public static array $radaPohledavky = [
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
     */
    public static array $radaPokladniPohyb = [
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
     */
    public static array $radaFakturyPrijate = [
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
     */
    public static array $radaNabidkyPrijate = [
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
     */
    public static array $radaObjednavkyPrijate = [
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
     */
    public static array $radaPoptavkyPrijate = [
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
     */
    public static array $radaSkladovyPohyb = [
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
     */
    public static array $radaFakturyVydane = [
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
     */
    public static array $radaNabidkyVydane = [
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
     */
    public static array $radaObjednavkyVydane = [
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
     */
    public static array $radaPoptavkyVydane = [
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
     */
    public static array $radaZavazku = [
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
     */
    public static array $dokladKUhrade = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Relations.
     */
    public static array $intrastatDruhDopravy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence dite (Dítě) Relations.
     */
    public static array $dite = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Relations.
     */
    public static array $cenikObal = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence forma-dopravy (Formy dopravy) Relations.
     */
    public static array $formaDopravy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence forma-uhrady (Formy úhrady) Relations.
     */
    public static array $formaUhrady = [
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
     */
    public static array $osobaHlavicka = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence insight (Insight) Relations.
     */
    public static array $insight = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence interni-doklad (Interní doklady) Relations.
     */
    public static array $interniDoklad = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence inventura (Inventury) Relations.
     */
    public static array $inventura = [
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
     */
    public static array $certifikatFinbricks = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     */
    public static array $konstSymbol = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence kontakt (Kontakty) Relations.
     */
    public static array $kontakt = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Relations.
     */
    public static array $intrastatKrajUrceni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence kurz (Kurzy) Relations.
     */
    public static array $kurz = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Relations.
     */
    public static array $intrastatKurz = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Relations.
     */
    public static array $kurzProCenotvorbu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence kurz-pro-preceneni (Kurzy pro přecenění) Relations.
     */
    public static array $kurzProPreceneni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence kusovnik (Kusovník) Relations.
     */
    public static array $kusovnik = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Relations.
     */
    public static array $intrastatKodNomenklatury = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence leasing (Leasing) Relations.
     */
    public static array $leasing = [
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
     */
    public static array $majetek = [
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
     */
    public static array $mapovaniSkladu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Relations.
     */
    public static array $mzdovaSlozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence misto-urceni (Místa určení) Relations.
     */
    public static array $mistoUrceni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence mena (Měny) Relations.
     */
    public static array $mena = [
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
     */
    public static array $intrastatMernaJednotka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence merna-jednotka (Měrné jednotky ) Relations.
     */
    public static array $mernaJednotka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence nepritomnost (Nepřítomnost) Relations.
     */
    public static array $nepritomnost = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence naklad (Náklady na události / aktivity) Relations.
     */
    public static array $naklad = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Relations.
     */
    public static array $intrastatObchodniTransakce = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence smlouva (Odběratelské smlouvy) Relations.
     */
    public static array $smlouva = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Relations.
     */
    public static array $odpisovaSkupina = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence uzivatel (Osoby a uživatelé) Relations.
     */
    public static array $uzivatel = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence pohledavka (Ostatní pohledávky) Relations.
     */
    public static array $pohledavka = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence zavazek (Ostatní závazky) Relations.
     */
    public static array $zavazek = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Relations.
     */
    public static array $uzivatelskyDotazParametr = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence penezni-ustav (Peněžní ústavy) Relations.
     */
    public static array $penezniUstav = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence osoba (Personalistika) Relations.
     */
    public static array $osoba = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     */
    public static array $podobneZbozi = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pokladni-pohyb (Pokladna) Relations.
     */
    public static array $pokladniPohyb = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
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
     */
    public static array $parametr = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Relations.
     */
    public static array $prikazKInkasuPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Relations.
     */
    public static array $prikazKUhradePolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Relations.
     */
    public static array $interniDokladPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence inventura-polozka (Položky inventur) Relations.
     */
    public static array $inventuraPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Relations.
     */
    public static array $pohledavkaPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Relations.
     */
    public static array $zavazekPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Relations.
     */
    public static array $pokladniPohybPolozka = [
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
     */
    public static array $nabidkaPrijataPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Relations.
     */
    public static array $objednavkaPrijataPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Relations.
     */
    public static array $fakturaPrijataPolozka = [
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
     */
    public static array $poptavkaPrijataPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Relations.
     */
    public static array $skladovyPohybPolozka = [
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
     */
    public static array $smlouvaPolozka = [
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
     */
    public static array $nabidkaVydanaPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Relations.
     */
    public static array $objednavkaVydanaPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Relations.
     */
    public static array $poptavkaVydanaPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Relations.
     */
    public static array $fakturaVydanaPolozka = [
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
     */
    public static array $bankaPolozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence poplatek (Poplatky) Relations.
     */
    public static array $poplatek = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence psc (Poštovní směrovací čísla) Relations.
     */
    public static array $psc = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pracovni-pomer (Pracovní poměr) Relations.
     */
    public static array $pracovniPomer = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Relations.
     */
    public static array $pracovniPomerHlavicka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence prodejka (Prodejní kasa) Relations.
     */
    public static array $prodejka = [
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
        'zalohy-k-odpoctu' => [
            'url' => 'zalohy-k-odpoctu',
            'evidenceType' => 'ZALOHA_K_ODPOCTU',
            'name' => 'Záloha k odpočtu',
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
        'castky-k-odpoctu' => [
            'url' => 'castky-k-odpoctu',
            'evidenceType' => 'CASTKY_K_ODPOCTU',
            'name' => 'Částky k odpočtu',
        ],
    ];

    /**
     * Evidence prace (Práce pro střediska) Relations.
     */
    public static array $prace = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence prace-mesic (Práce pro střediska) Relations.
     */
    public static array $praceMesic = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence text (Předdefinované texty) Relations.
     */
    public static array $text = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Relations.
     */
    public static array $predpisZauctovani = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence faktura-prijata (Přijaté faktury) Relations.
     */
    public static array $fakturaPrijata = [
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
        'zalohy-k-odpoctu' => [
            'url' => 'zalohy-k-odpoctu',
            'evidenceType' => 'ZALOHA_K_ODPOCTU',
            'name' => 'Záloha k odpočtu',
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
        'castky-k-odpoctu' => [
            'url' => 'castky-k-odpoctu',
            'evidenceType' => 'CASTKY_K_ODPOCTU',
            'name' => 'Částky k odpočtu',
        ],
    ];

    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Relations.
     */
    public static array $nabidkaPrijata = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Relations.
     */
    public static array $objednavkaPrijata = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Relations.
     */
    public static array $poptavkaPrijata = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Relations.
     */
    public static array $skladovyPohyb = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Relations.
     */
    public static array $prikazKInkasu = [
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
     */
    public static array $prikazKUhrade = [
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
     */
    public static array $priloha = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence prislustenstvi (Příslušenství) Relations.
     */
    public static array $prislustenstvi = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence region (Region) Relations.
     */
    public static array $region = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence rezervace (Rezervace) Relations.
     */
    public static array $rezervace = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Relations.
     */
    public static array $rocniRada = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence sady-a-komplety (Sady) Relations.
     */
    public static array $sadyAKomplety = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence sazba-dph (Sazby DPH) Relations.
     */
    public static array $sazbaDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Relations.
     */
    public static array $dashboardSharing = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Relations.
     */
    public static array $bankovniUcet = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence pokladna (Seznam pokladen) Relations.
     */
    public static array $pokladna = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Relations.
     */
    public static array $typProdejky = [
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
     */
    public static array $sestava = [
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
     */
    public static array $sklad = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Relations.
     */
    public static array $preneseniDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skladova-karta (Skladové karty) Relations.
     */
    public static array $skladovaKarta = [
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
     */
    public static array $skupinaAtributu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skupina-firem (Skupiny firem) Relations.
     */
    public static array $skupinaFirem = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skupina-osob (Skupiny osob) Relations.
     */
    public static array $skupinaOsob = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skupina-plneni (Skupiny plnění) Relations.
     */
    public static array $skupinaPlneni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Relations.
     */
    public static array $skupinaZbozi = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence skupina-stitku (Skupiny štítků) Relations.
     */
    public static array $skupinaStitku = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence smena (Směny) Relations.
     */
    public static array $smena = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence splatkovy-kalendar (Splátkový kalendář) Relations.
     */
    public static array $splatkovyKalendar = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence dashboard-panel (Správa přehledů) Relations.
     */
    public static array $dashboardPanel = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence srazka (Srážka) Relations.
     */
    public static array $srazka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence standardni-predpis (Standardní předpis sestavy) Relations.
     */
    public static array $standardniPredpis = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Relations.
     */
    public static array $ucetniOsnova = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stav-obchodniho-dokladu (Stav obchodního dokladu) Relations.
     */
    public static array $stavObchodnihoDokladu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stav-smlouvy (Stavy smluv) Relations.
     */
    public static array $stavSmlouvy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stav-zakazky (Stavy zakázek) Relations.
     */
    public static array $stavZakazky = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Relations.
     */
    public static array $stalaMzdovaSlozka = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stat (Státy) Relations.
     */
    public static array $stat = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stat-dph (Státy DPH) Relations.
     */
    public static array $statDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stredisko (Střediska) Relations.
     */
    public static array $stredisko = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence subjekt (Subjekt) Relations.
     */
    public static array $subjekt = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence sumace-sestavy (Sumace v sestavách) Relations.
     */
    public static array $sumaceSestavy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Relations.
     */
    public static array $typPracovnihoPomeru = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cenik-typ-sazby-dph (Typ sazby DPH) Relations.
     */
    public static array $cenikTypSazbyDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-atributu (Typy atributů) Relations.
     */
    public static array $typAtributu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-banka (Typy bankovních dokladů) Relations.
     */
    public static array $typBanka = [
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
     */
    public static array $dodavatelskyTypSmlouvy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-dokladu (Typy dokladů) Relations.
     */
    public static array $typDokladu = [
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
     */
    public static array $typInternihoDokladu = [
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
     */
    public static array $typLeasingu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-majetku (Typy majetků) Relations.
     */
    public static array $typMajetku = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Relations.
     */
    public static array $typNakladu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Relations.
     */
    public static array $typSmlouvy = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Relations.
     */
    public static array $typPohledavky = [
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
     */
    public static array $typZavazku = [
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
     */
    public static array $typPokladniPohyb = [
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
     */
    public static array $typFakturyPrijate = [
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
     */
    public static array $typNabidkyPrijate = [
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
     */
    public static array $typObjednavkyPrijate = [
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
     */
    public static array $typPoptavkyPrijate = [
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
     */
    public static array $typSkladovyPohyb = [
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
     */
    public static array $typAktivity = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Relations.
     */
    public static array $typUzivatelskeVazby = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Relations.
     */
    public static array $typFakturyVydane = [
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
     */
    public static array $typNabidkyVydane = [
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
     */
    public static array $typObjednavkyVydane = [
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
     */
    public static array $typPoptavkyVydane = [
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
     */
    public static array $typZakazky = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Relations.
     */
    public static array $typVzajemnychZapoctu = [
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
     */
    public static array $majetekUdalost = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence udalost (Události, aktivity) Relations.
     */
    public static array $udalost = [
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
     */
    public static array $ulozenePriznaniDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence ulozene-priznani-kon-vyk-dph (Uložené přiznání Kontrolního hlášení DPH) Relations.
     */
    public static array $ulozenePriznaniKonVykDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Relations.
     */
    public static array $radekPriznaniDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence umisteni (Umístění) Relations.
     */
    public static array $umisteni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Relations.
     */
    public static array $umisteniVeSkladu = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Relations.
     */
    public static array $umisteniVeSkladuRegal = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Relations.
     */
    public static array $umisteniVeSkladuPolice = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Relations.
     */
    public static array $umisteniVeSkladuMistnost = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence sablona-upominky (Upomínky) Relations.
     */
    public static array $sablonaUpominky = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence strom (Uzel stromu) Relations.
     */
    public static array $strom = [
        'prilohy' => [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Relations.
     */
    public static array $uzivatelskyDotaz = [
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
     */
    public static array $sablonaMail = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence filtr (Uživatelské filtry) Relations.
     */
    public static array $filtr = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence report (Uživatelské reporty) Relations.
     */
    public static array $report = [
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
     */
    public static array $role = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence custom-button (Uživatelské tlačítko) Relations.
     */
    public static array $customButton = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence xslt (Uživatelské transformace) Relations.
     */
    public static array $xslt = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Relations.
     */
    public static array $uzivatelskyDotazVlastnost = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence faktura-vydana (Vydané faktury) Relations.
     */
    public static array $fakturaVydana = [
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
        'zalohy-k-odpoctu' => [
            'url' => 'zalohy-k-odpoctu',
            'evidenceType' => 'ZALOHA_K_ODPOCTU',
            'name' => 'Záloha k odpočtu',
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
        'castky-k-odpoctu' => [
            'url' => 'castky-k-odpoctu',
            'evidenceType' => 'CASTKY_K_ODPOCTU',
            'name' => 'Částky k odpočtu',
        ],
    ];

    /**
     * Evidence nabidka-vydana (Vydané nabídky) Relations.
     */
    public static array $nabidkaVydana = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence objednavka-vydana (Vydané objednávky) Relations.
     */
    public static array $objednavkaVydana = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence poptavka-vydana (Vydané poptávky) Relations.
     */
    public static array $poptavkaVydana = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Relations.
     */
    public static array $hodnoceniZakazky = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Relations.
     */
    public static array $vzajemnyZapocet = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence zakazka (Zakázky) Relations.
     */
    public static array $zakazka = [
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
        'ucely' => [
            'url' => 'ucely',
            'evidenceType' => 'UCEL',
            'name' => 'Účel',
        ],
    ];

    /**
     * Evidence zamek (Zamykání období) Relations.
     */
    public static array $zamek = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Relations.
     */
    public static array $formaUhradyZauctovani = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Relations.
     */
    public static array $intrastatZvlastniPohyb = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence zaloha-k-odpoctu (Zálohy k odpočtu) Relations.
     */
    public static array $zalohaKOdpoctu = [
        'doporuceni' => [
            'url' => 'doporuceni',
            'evidenceType' => 'DOPORUCENI',
            'name' => 'Doporučení',
        ],
    ];

    /**
     * Evidence rada (dokladové řady) Relations.
     */
    public static array $rada = [
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
     * Evidence ucel (Účely) Relations.
     */
    public static array $ucel = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence ucetni-odpis (Účetní odpisy) Relations.
     */
    public static array $ucetniOdpis = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     */
    public static array $ucet = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cinnost (Činnost) Relations.
     */
    public static array $cinnost = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Relations.
     */
    public static array $ciselnikMzdovychSlozek = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Relations.
     */
    public static array $typStavuCeniku = [
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
     */
    public static array $stavCeniku = [
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
     */
    public static array $cisloBaliku = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence radek-sestavy (Řádek sestavy) Relations.
     */
    public static array $radekSestavy = [
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
     */
    public static array $cleneniKontrolniHlaseni = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Relations.
     */
    public static array $cleneniDph = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stitek (Štítky) Relations.
     */
    public static array $stitek = [
        'uzivatelske-vazby' => [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];
}
