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
 * Evidence Formats.
 *
 * @see https://demo.flexibee.eu/devdoc/formats Provádění akcí
 */
class Formats
{
    /**
     * Source FlexiBee server version.
     */
    public static string $version = '2025.3.9';

    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     *
     * @var array formats known to flexibee
     */
    public static array $formats = [
        'JS' => [
            'desc' => 'JavaScript',
            'suffix' => 'js',
            'content-type' => 'application/javascript',
            'import' => false,
        ],
        'PNG' => [
            'desc' => 'Portable Network Graphics',
            'suffix' => 'png',
            'content-type' => 'image/png',
            'import' => false,
        ],
        'JPG' => [
            'desc' => 'JPEG File Interchange Format.',
            'suffix' => 'jpg',
            'content-type' => 'image/jpeg',
            'import' => false,
        ],
        'CSS' => [
            'desc' => 'Kaskádový styl',
            'suffix' => 'css',
            'content-type' => 'text/css',
            'import' => false,
        ],
        'HTML' => [
            'desc' => 'HTML stránka pro zobrazení informací na webové stránce.',
            'suffix' => 'html',
            'content-type' => 'text/html',
            'import' => false,
        ],
        'XML' => [
            'desc' => 'Strojově čitelná struktura ve formátu XML.',
            'suffix' => 'xml',
            'content-type' => 'application/xml',
            'import' => true],
        'JSON' => [
            'desc' => 'Strojově čitelná struktura ve formátu JSON. ',
            'suffix' => 'json',
            'content-type' => 'application/json',
            'import' => true,
        ],
        'CSV' => [
            'desc' => 'Tabulkový výstup do formátu CSV (Column Separated Values).',
            'suffix' => 'csv',
            'content-type' => 'text/csv',
            'import' => true,
        ],
        'DBF' => [
            'desc' => 'Databázový výstup ve formátu DBF (dBase).',
            'suffix' => 'dbf',
            'content-type' => 'application/dbf',
            'import' => true,
        ],
        'XLS' => [
            'desc' => 'Tabulkový výstup ve formátu Excel.',
            'suffix' => 'xls',
            'content-type' => 'application/ms-excel',
            'import' => true,
        ],
        'ISDOC' => [
            'desc' => 'e-faktura ISDOC.',
            'suffix' => 'isdoc',
            'content-type' => 'application/x-isdoc',
            'import' => false,
        ],
        'ISDOCx' => [
            'desc' => 'e-faktura ISDOC s PDF přílohou',
            'suffix' => 'isdocx',
            'content-type' => 'application/x-isdocx',
            'import' => false,
        ],
        'EDI' => [
            'desc' => 'Elektronická výměna data (EDI) ve formátu INHOUSE.',
            'suffix' => 'edi',
            'content-type' => 'application/x-edi-inhouse',
            'import' => 'objednavka-prijata',
        ],
        'PDF' => [
            'desc' => 'Generování tiskového reportu. Jedná se o stejnou funkci která je dostupná v aplikaci. Export do PDF',
            'suffix' => 'pdf',
            'content-type' => 'application/pdf',
            'import' => false,
        ],
        'vCard' => [
            'desc' => 'Výstup adresáře do formátu elektronické vizitky vCard.',
            'suffix' => 'vcf',
            'content-type' => 'text/vcard',
            'import' => false,
        ],
        'iCalendar' => [
            'desc' => 'Výstup do kalendáře ve formátu iCalendar. Lze takto exportovat události, ale také třeba splatnosti u přijatých či vydaných faktur.',
            'suffix' => 'ical',
            'content-type' => 'text/calendar',
            'import' => false,
        ],
        'TEXT' => [
            'desc' => 'Prostý text',
            'suffix' => 'txt',
            'content-type' => 'text/plain',
            'import' => false,
        ],
        'TTF' => [
            'desc' => 'TrueType font',
            'suffix' => 'ttf',
            'content-type' => 'application/x-font-truetype',
            'import' => false,
        ],
        'JASPERReport' => [
            'desc' => 'JasperReports',
            'content-type' => 'application/x-java-serialized-object',
            'suffix' => 'jasper',
            'import' => false,
        ],
    ];

    /**
     * Evidence adresar (Adresy firem) Formats.
     */
    public static array $adresar = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
        'DBF' => 'dbf',
        'XLS' => 'xls',
        'ISDOC' => 'isdoc',
        'ISDOCx' => 'isdocx',
        'PDF' => 'pdf',
        'vCard' => 'vcf',
    ];

    /**
     * Evidence atribut (Atributy) Formats.
     */
    public static array $atribut = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence autotisk (Automatický tisk) Formats.
     */
    public static array $autotisk = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence banka (Banka) Formats.
     */
    public static array $banka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Formats.
     */
    public static array $formatElektronickehoBankovnictvi = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence format-elektronickeho-prikazu (Bankovní formáty) Formats.
     */
    public static array $formatElektronickehoPrikazu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Formats.
     */
    public static array $adresarBankovniUcet = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence bankovni-ucet-pokladna (Bankovní účty a pokladny) Formats.
     */
    public static array $bankovniUcetPokladna = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence bankovni-ucet-sklad-pokladna (Banky/pokladny/sklady) Formats.
     */
    public static array $bankovniUcetSkladPokladna = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenova-uroven (Cenové úrovně) Formats.
     */
    public static array $cenovaUroven = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Formats.
     */
    public static array $odberatel = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenik (Ceník) Formats.
     */
    public static array $cenik = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Formats.
     */
    public static array $cenikovaSkupina = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence certifikacni-autorita (Certifikační autority) Formats.
     */
    public static array $certifikacniAutorita = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence certifikat (Certifikáty) Formats.
     */
    public static array $certifikat = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence danovy-naklad (Daňové náklady) Formats.
     */
    public static array $danovyNaklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence danovy-odpis (Daňové odpisy) Formats.
     */
    public static array $danovyOdpis = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Formats.
     */
    public static array $intrastatDodaciPodminky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Formats.
     */
    public static array $dodavatelskaSmlouva = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence dodavatel (Dodavatelé) Formats.
     */
    public static array $dodavatel = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Formats.
     */
    public static array $radaBanka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Formats.
     */
    public static array $radaInternihoDokladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Formats.
     */
    public static array $radaPohledavky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Formats.
     */
    public static array $radaPokladniPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Formats.
     */
    public static array $radaFakturyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Formats.
     */
    public static array $radaNabidkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Formats.
     */
    public static array $radaObjednavkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Formats.
     */
    public static array $radaPoptavkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Formats.
     */
    public static array $radaSkladovyPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Formats.
     */
    public static array $radaFakturyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Formats.
     */
    public static array $radaNabidkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Formats.
     */
    public static array $radaObjednavkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Formats.
     */
    public static array $radaPoptavkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Formats.
     */
    public static array $radaZavazku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence doklad-k-uhrade (Doklady k úhradě) Formats.
     */
    public static array $dokladKUhrade = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence doporuceni (Doporučení) Formats.
     */
    public static array $doporuceni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Formats.
     */
    public static array $intrastatDruhDopravy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Formats.
     */
    public static array $cenikObal = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence forma-dopravy (Formy dopravy) Formats.
     */
    public static array $formaDopravy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence forma-uhrady (Formy úhrady) Formats.
     */
    public static array $formaUhrady = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence hlavni-kniha (Hlavní kniha) Formats.
     */
    public static array $hlavniKniha = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence individualni-cenik (Individuální ceník) Formats.
     */
    public static array $individualniCenik = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence insight (Insight) Formats.
     */
    public static array $insight = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence interni-doklad (Interní doklady) Formats.
     */
    public static array $interniDoklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence inventura (Inventury) Formats.
     */
    public static array $inventura = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence certifikat-finbricks (Klíče Finbricks) Formats.
     */
    public static array $certifikatFinbricks = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence konst-symbol (Konstantní symboly) Formats.
     */
    public static array $konstSymbol = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence kontakt (Kontakty) Formats.
     */
    public static array $kontakt = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence region (Kraj) Formats.
     */
    public static array $region = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Formats.
     */
    public static array $intrastatKrajUrceni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence kurz (Kurzy) Formats.
     */
    public static array $kurz = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Formats.
     */
    public static array $intrastatKurz = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Formats.
     */
    public static array $kurzProCenotvorbu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence kurz-pro-preceneni (Kurzy pro přecenění) Formats.
     */
    public static array $kurzProPreceneni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence kusovnik (Kusovník) Formats.
     */
    public static array $kusovnik = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Formats.
     */
    public static array $intrastatKodNomenklatury = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence leasing (Leasing) Formats.
     */
    public static array $leasing = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence majetek (Majetek) Formats.
     */
    public static array $majetek = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence mapovani-skladu (Mapování skladů) Formats.
     */
    public static array $mapovaniSkladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence misto-urceni (Místa určení) Formats.
     */
    public static array $mistoUrceni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence mena (Měny) Formats.
     */
    public static array $mena = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Formats.
     */
    public static array $intrastatMernaJednotka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence merna-jednotka (Měrné jednotky ) Formats.
     */
    public static array $mernaJednotka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence nastaveni (Nastavení) Formats.
     */
    public static array $nastaveni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vazebni-doklad (Navázané doklady) Formats.
     */
    public static array $vazebniDoklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence po-splatnosti (Neuhrazené pohledávky/závazky po splatnosti) Formats.
     */
    public static array $poSplatnosti = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence naklad (Náklady na události / aktivity) Formats.
     */
    public static array $naklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Formats.
     */
    public static array $cenikovyPohybNakup = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Formats.
     */
    public static array $cenikovyPohybProdej = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Formats.
     */
    public static array $intrastatObchodniTransakce = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence strom-koren (Obecný strom) Formats.
     */
    public static array $stromKoren = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence obratova-predvaha (Obratová předvaha) Formats.
     */
    public static array $obratovaPredvaha = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence obrat (Obraty) Formats.
     */
    public static array $obrat = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence smlouva (Odběratelské smlouvy) Formats.
     */
    public static array $smlouva = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Formats.
     */
    public static array $odpisovaSkupina = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence uzivatel (Osoby a uživatelé) Formats.
     */
    public static array $uzivatel = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pohledavka (Ostatní pohledávky) Formats.
     */
    public static array $pohledavka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zavazek (Ostatní závazky) Formats.
     */
    public static array $zavazek = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Formats.
     */
    public static array $uzivatelskyDotazParametr = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence penezni-ustav (Peněžní ústavy) Formats.
     */
    public static array $penezniUstav = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence podklady-dph (Podklady DPH) Formats.
     */
    public static array $podkladyDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence podobne-zbozi (Podobné) Formats.
     */
    public static array $podobneZbozi = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Formats.
     */
    public static array $pohybNaUctech = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pokladni-pohyb (Pokladna) Formats.
     */
    public static array $pokladniPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Formats.
     */
    public static array $parametr = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Formats.
     */
    public static array $prikazKInkasuPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Formats.
     */
    public static array $prikazKUhradePolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Formats.
     */
    public static array $interniDokladPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence inventura-polozka (Položky inventur) Formats.
     */
    public static array $inventuraPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Formats.
     */
    public static array $pohledavkaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Formats.
     */
    public static array $zavazekPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Formats.
     */
    public static array $pokladniPohybPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Formats.
     */
    public static array $nabidkaPrijataPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Formats.
     */
    public static array $objednavkaPrijataPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Formats.
     */
    public static array $fakturaPrijataPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Formats.
     */
    public static array $poptavkaPrijataPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Formats.
     */
    public static array $skladovyPohybPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence smlouva-polozka (Položky smluv) Formats.
     */
    public static array $smlouvaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Formats.
     */
    public static array $nabidkaVydanaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Formats.
     */
    public static array $objednavkaVydanaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Formats.
     */
    public static array $poptavkaVydanaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Formats.
     */
    public static array $fakturaVydanaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Formats.
     */
    public static array $bankaPolozka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence poplatek (Poplatky) Formats.
     */
    public static array $poplatek = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence psc (Poštovní směrovací čísla) Formats.
     */
    public static array $psc = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prodejka (Prodejní kasa) Formats.
     */
    public static array $prodejka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Formats.
     */
    public static array $pravoViditelnosti = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence text (Předdefinované texty) Formats.
     */
    public static array $text = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Formats.
     */
    public static array $predpisZauctovani = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence doklad (Přehled všech dokladů) Formats.
     */
    public static array $doklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence faktura-prijata (Přijaté faktury) Formats.
     */
    public static array $fakturaPrijata = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Formats.
     */
    public static array $nabidkaPrijata = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Formats.
     */
    public static array $objednavkaPrijata = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Formats.
     */
    public static array $poptavkaPrijata = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Formats.
     */
    public static array $skladovyPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Formats.
     */
    public static array $prikazKInkasu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Formats.
     */
    public static array $prikazKUhrade = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence priloha (Příloha) Formats.
     */
    public static array $priloha = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prislustenstvi (Příslušenství) Formats.
     */
    public static array $prislustenstvi = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rezervace (Rezervace) Formats.
     */
    public static array $rezervace = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Formats.
     */
    public static array $rocniRada = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sady-a-komplety (Sady) Formats.
     */
    public static array $sadyAKomplety = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence saldo (Saldo) Formats.
     */
    public static array $saldo = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sazba-dph (Sazby DPH) Formats.
     */
    public static array $sazbaDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Formats.
     */
    public static array $dashboardSharing = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Formats.
     */
    public static array $bankovniUcet = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pokladna (Seznam pokladen) Formats.
     */
    public static array $pokladna = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Formats.
     */
    public static array $typProdejky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sestava (Seznam sestav) Formats.
     */
    public static array $sestava = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sklad (Seznam skladů) Formats.
     */
    public static array $sklad = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Formats.
     */
    public static array $preneseniDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skladova-karta (Skladové karty) Formats.
     */
    public static array $skladovaKarta = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skupina-atributu (Skupiny atributů) Formats.
     */
    public static array $skupinaAtributu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skupina-firem (Skupiny firem) Formats.
     */
    public static array $skupinaFirem = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skupina-plneni (Skupiny plnění) Formats.
     */
    public static array $skupinaPlneni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Formats.
     */
    public static array $skupinaZbozi = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence skupina-stitku (Skupiny štítků) Formats.
     */
    public static array $skupinaStitku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence souhrnne-hlaseni-dph (Souhrnné hlášení k DPH) Formats.
     */
    public static array $souhrnneHlaseniDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Formats.
     */
    public static array $rozvahaPoUctech = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vysledovka-po-uctech (Soupis nákladů a výnosů) Formats.
     */
    public static array $vysledovkaPoUctech = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence splatkovy-kalendar (Splátkový kalendář) Formats.
     */
    public static array $splatkovyKalendar = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence dashboard-panel (Správa přehledů) Formats.
     */
    public static array $dashboardPanel = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence standardni-predpis (Standardní předpis sestavy) Formats.
     */
    public static array $standardniPredpis = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Formats.
     */
    public static array $ucetniOsnova = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-obchodniho-dokladu (Stav obchodního dokladu) Formats.
     */
    public static array $stavObchodnihoDokladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Formats.
     */
    public static array $stavSkladuKDatu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Formats.
     */
    public static array $saldoKDatu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-smlouvy (Stavy smluv) Formats.
     */
    public static array $stavSmlouvy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-zakazky (Stavy zakázek) Formats.
     */
    public static array $stavZakazky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-uctu (Stavy účtů) Formats.
     */
    public static array $stavUctu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stat (Státy) Formats.
     */
    public static array $stat = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stat-dph (Státy DPH) Formats.
     */
    public static array $statDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stredisko (Střediska) Formats.
     */
    public static array $stredisko = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence subjekt (Subjekt) Formats.
     */
    public static array $subjekt = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sumace-sestavy (Sumace v sestavách) Formats.
     */
    public static array $sumaceSestavy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-organizace (Typ organizace) Formats.
     */
    public static array $typOrganizace = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cenik-typ-sazby-dph (Typ sazby DPH) Formats.
     */
    public static array $cenikTypSazbyDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-atributu (Typy atributů) Formats.
     */
    public static array $typAtributu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-banka (Typy bankovních dokladů) Formats.
     */
    public static array $typBanka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Formats.
     */
    public static array $dodavatelskyTypSmlouvy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-dokladu (Typy dokladů) Formats.
     */
    public static array $typDokladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Formats.
     */
    public static array $typInternihoDokladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-leasingu (Typy leasingů) Formats.
     */
    public static array $typLeasingu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-majetku (Typy majetků) Formats.
     */
    public static array $typMajetku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Formats.
     */
    public static array $typNakladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Formats.
     */
    public static array $typSmlouvy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Formats.
     */
    public static array $typPohledavky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Formats.
     */
    public static array $typZavazku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Formats.
     */
    public static array $typPokladniPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Formats.
     */
    public static array $typFakturyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Formats.
     */
    public static array $typNabidkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Formats.
     */
    public static array $typObjednavkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Formats.
     */
    public static array $typPoptavkyPrijate = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Formats.
     */
    public static array $typSkladovyPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Formats.
     */
    public static array $typAktivity = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Formats.
     */
    public static array $typUzivatelskeVazby = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Formats.
     */
    public static array $typFakturyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Formats.
     */
    public static array $typNabidkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Formats.
     */
    public static array $typObjednavkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Formats.
     */
    public static array $typPoptavkyVydane = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-zakazky (Typy zakázek) Formats.
     */
    public static array $typZakazky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Formats.
     */
    public static array $typVzajemnychZapoctu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence majetek-udalost (Události) Formats.
     */
    public static array $majetekUdalost = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence udalost (Události, aktivity) Formats.
     */
    public static array $udalost = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ulozene-priznani-dph (Uložené přiznání DPH) Formats.
     */
    public static array $ulozenePriznaniDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ulozene-priznani-kon-vyk-dph (Uložené přiznání Kontrolního hlášení DPH) Formats.
     */
    public static array $ulozenePriznaniKonVykDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Formats.
     */
    public static array $radekPriznaniDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni (Umístění) Formats.
     */
    public static array $umisteni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Formats.
     */
    public static array $umisteniVeSkladu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Formats.
     */
    public static array $umisteniVeSkladuRegal = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Formats.
     */
    public static array $umisteniVeSkladuPolice = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Formats.
     */
    public static array $umisteniVeSkladuMistnost = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sablona-upominky (Upomínky) Formats.
     */
    public static array $sablonaUpominky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence umisteni-uctu (Upřesnění umístění účtu) Formats.
     */
    public static array $umisteniUctu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence strom (Uzel stromu) Formats.
     */
    public static array $strom = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Formats.
     */
    public static array $uzivatelskyDotaz = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sablona-mail (Uživatelské e-mailové šablony) Formats.
     */
    public static array $sablonaMail = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence filtr (Uživatelské filtry) Formats.
     */
    public static array $filtr = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence custom-button (Uživatelské tlačítko) Formats.
     */
    public static array $customButton = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence xslt (Uživatelské transformace) Formats.
     */
    public static array $xslt = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Formats.
     */
    public static array $uzivatelskaVazba = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Formats.
     */
    public static array $stromCenik = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vazba (Vazby dokladu) Formats.
     */
    public static array $vazba = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Formats.
     */
    public static array $uzivatelskyDotazVlastnost = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence faktura-vydana (Vydané faktury) Formats.
     */
    public static array $fakturaVydana = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence nabidka-vydana (Vydané nabídky) Formats.
     */
    public static array $nabidkaVydana = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence objednavka-vydana (Vydané objednávky) Formats.
     */
    public static array $objednavkaVydana = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence poptavka-vydana (Vydané poptávky) Formats.
     */
    public static array $poptavkaVydana = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Formats.
     */
    public static array $hodnoceniZakazky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Formats.
     */
    public static array $vzajemnyZapocet = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Formats.
     */
    public static array $vykazHospodareni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Formats.
     */
    public static array $vyrobniCislo = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zakazka (Zakázky) Formats.
     */
    public static array $zakazka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Formats.
     */
    public static array $formaUhradyZauctovani = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence changes (Změny) Formats.
     */
    public static array $changes = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Formats.
     */
    public static array $intrastatZvlastniPohyb = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zaloha-k-odpoctu (Zálohy k odpočtu) Formats.
     */
    public static array $zalohaKOdpoctu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zapujcka (Zápůjčky) Formats.
     */
    public static array $zapujcka = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence rada (dokladové řady) Formats.
     */
    public static array $rada = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence prodejka-platba (Úhrada) Formats.
     */
    public static array $prodejkaPlatba = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence global-store (Úložiště globálního nastavení) Formats.
     */
    public static array $globalStore = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence setting-store (Úložiště nastavení) Formats.
     */
    public static array $settingStore = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Formats.
     */
    public static array $analyzaZakazky = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ucetni-denik (Účetní deník) Formats.
     */
    public static array $ucetniDenik = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ucetni-obdobi (Účetní období) Formats.
     */
    public static array $ucetniObdobi = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ucetni-odpis (Účetní odpisy) Formats.
     */
    public static array $ucetniOdpis = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence ucet (Účtový rozvrh) Formats.
     */
    public static array $ucet = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cinnost (Činnost) Formats.
     */
    public static array $cinnost = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence castky-k-odpoctu (Částky k odpočtu) Formats.
     */
    public static array $castkyKOdpoctu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Formats.
     */
    public static array $typStavuCeniku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Formats.
     */
    public static array $stavCeniku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cislo-baliku (Čísla balíků) Formats.
     */
    public static array $cisloBaliku = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence radek-sestavy (Řádek sestavy) Formats.
     */
    public static array $radekSestavy = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Formats.
     */
    public static array $cleneniKontrolniHlaseni = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence pricteni-rozdilu (Řádky pro přičtení rozdílu) Formats.
     */
    public static array $pricteniRozdilu = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Formats.
     */
    public static array $cleneniDph = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence sarze-expirace (Šarže a expirace) Formats.
     */
    public static array $sarzeExpirace = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence stitek (Štítky) Formats.
     */
    public static array $stitek = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence zurnal (Žurnál) Formats.
     */
    public static array $zurnal = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Evidence smlouva-zurnal (Žurnál pro smlouvy) Formats.
     */
    public static array $smlouvaZurnal = [
        'HTML' => 'html',
        'XML' => 'xml',
        'JSON' => 'json',
        'CSV' => 'csv',
    ];

    /**
     * Array of formats indexed by Content-Type.
     *
     * @return array
     */
    public static function byContentType()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix.
     *
     * @return array
     */
    public static function bySuffix()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'suffix');
    }

    /**
     * Obtain Suffix for given content.
     *
     * @param string $suffix
     *
     * @return string
     */
    public static function suffixToContentType($suffix)
    {
        $types = self::bySuffix();

        return isset($types[$suffix]) ? $types[$suffix]['content-type'] : null;
    }

    /**
     * Obtain Content-Type for given suffix.
     *
     * @param string $contentType
     *
     * @return string
     */
    public static function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType();

        return isset($types[$contentType]) ? $types[$contentType]['suffix'] : null;
    }

    /**
     * Obtain json for application/json.
     */
    public static function contentTypeToResponseFormat(string $contentType, string $url = ''): string
    {
        if (!empty($url)) {
            $url = parse_url($url, \PHP_URL_PATH);
        }

        $contentTypeClean = strstr($contentType, ';') ? substr(
            $contentType,
            0,
            strpos($contentType, ';'),
        ) : $contentType;

        switch ($url) {
            case '/login-logout/logi\n':
                $responseFormat = 'json';

                break;

            default:
                switch ($contentTypeClean) {
                    case 'text/javascript':
                        $responseFormat = 'js';

                        break;

                    default:
                        $responseFormat = self::contentTypeToSuffix($contentTypeClean);

                        break;
                }

                break;
        }

        return (string) $responseFormat;
    }
}
