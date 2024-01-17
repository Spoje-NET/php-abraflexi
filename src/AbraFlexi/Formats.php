<?php

/**
 * AbraFlexi - Evidence Formats.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Evidence Formats
 *
 * @link https://demo.flexibee.eu/devdoc/formats Provádění akcí
 */
class Formats
{
 /**
 * Source FlexiBee server version.
 *
 * @var string
 */
    public static $version = '2024.1.2';


    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     * @var array formats known to flexibee
     */
    public static $formats = [
        'JS' => [
            'desc' => 'JavaScript',
            'suffix' => 'js',
            'content-type' => 'application/javascript',
            'import' => false
            ],
        'PNG' => [
            'desc' => 'Portable Network Graphics',
            'suffix' => 'png',
            'content-type' => 'image/png',
            'import' => false
            ],
        'JPG' => [
            'desc' => 'JPEG File Interchange Format.',
            'suffix' => 'jpg',
            'content-type' => 'image/jpeg',
            'import' => false
            ],
        'CSS' => [
            'desc' => 'Kaskádový styl',
            'suffix' => 'css',
            'content-type' => 'text/css',
            'import' => false
            ],
        'HTML' => [
            'desc' => 'HTML stránka pro zobrazení informací na webové stránce.',
            'suffix' => 'html',
            'content-type' => 'text/html',
            'import' => false
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
            'import' => true
            ],
        'CSV' => [
            'desc' => 'Tabulkový výstup do formátu CSV (Column Separated Values).',
            'suffix' => 'csv',
            'content-type' => 'text/csv',
            'import' => true
            ],
        'DBF' => [
            'desc' => 'Databázový výstup ve formátu DBF (dBase).',
            'suffix' => 'dbf',
            'content-type' => 'application/dbf',
            'import' => true
            ],
        'XLS' => [
            'desc' => 'Tabulkový výstup ve formátu Excel.',
            'suffix' => 'xls',
            'content-type' => 'application/ms-excel',
            'import' => true
            ],
        'ISDOC' => [
            'desc' => 'e-faktura ISDOC.',
            'suffix' => 'isdoc',
            'content-type' => 'application/x-isdoc',
            'import' => false
            ],
        'ISDOCx' => [
            'desc' => 'e-faktura ISDOC s PDF přílohou',
            'suffix' => 'isdocx',
            'content-type' => 'application/x-isdocx',
            'import' => false
            ],
        'EDI' => [
            'desc' => 'Elektronická výměna data (EDI) ve formátu INHOUSE.',
            'suffix' => 'edi',
            'content-type' => 'application/x-edi-inhouse',
            'import' => 'objednavka-prijata'
            ],
        'PDF' => [
            'desc' => 'Generování tiskového reportu. Jedná se o stejnou funkci která je dostupná v aplikaci. Export do PDF',
            'suffix' => 'pdf',
            'content-type' => 'application/pdf',
            'import' => false
            ],
        'vCard' => [
            'desc' => 'Výstup adresáře do formátu elektronické vizitky vCard.',
            'suffix' => 'vcf',
            'content-type' => 'text/vcard',
            'import' => false
            ],
        'iCalendar' => [
            'desc' => 'Výstup do kalendáře ve formátu iCalendar. Lze takto exportovat události, ale také třeba splatnosti u přijatých či vydaných faktur.',
            'suffix' => 'ical',
            'content-type' => 'text/calendar',
            'import' => false
            ],
        'TEXT' => [
            'desc' => 'Prostý text',
            'suffix' => 'txt',
            'content-type' => 'text/plain',
            'import' => false
            ],
        'TTF' => [
            'desc' => 'TrueType font',
            'suffix' => 'ttf',
            'content-type' => 'application/x-font-truetype',
            'import' => false
            ],
        'JASPERReport' => [
            'desc' => 'JasperReports',
            'content-type' => 'application/x-java-serialized-object',
            'suffix' => 'jasper',
            'import' => false
        ]
    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    public static function byContentType()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    public static function bySuffix()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'suffix');
    }

    /**
     * Obtain Suffix for given content
     *
     * @param string $suffix
     * @return string
     */
    public static function suffixToContentType($suffix)
    {
        $types = self::bySuffix();
        return isset($types[$suffix]) ? $types[$suffix]['content-type'] : null;
    }

    /**
     * Obtain Content-Type for given suffix
     *
     * @param string $contentType
     * @return string
     */
    public static function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType();
        return isset($types[$contentType]) ? $types[$contentType]['suffix'] : null;
    }

        /**
     * Evidence adresar (Adresy firem) Formats.
     *
     * @var array
     */
    public static $adresar = [
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
     * Evidence mzda (Aktualizace mezd) Formats.
     *
     * @var array
     */
    public static $mzda = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence analyza-nakupu (Analýza nákupu) Formats.
     *
     * @var array
     */
    public static $analyzaNakupu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence analyza-prodeje (Analýza prodeje) Formats.
     *
     * @var array
     */
    public static $analyzaProdeje = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence atribut (Atributy) Formats.
     *
     * @var array
     */
    public static $atribut = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence autotisk (Automatický tisk) Formats.
     *
     * @var array
     */
    public static $autotisk = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence banka (Banka) Formats.
     *
     * @var array
     */
    public static $banka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Formats.
     *
     * @var array
     */
    public static $formatElektronickehoBankovnictvi = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Formats.
     *
     * @var array
     */
    public static $adresarBankovniUcet = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Formats.
     *
     * @var array
     */
    public static $mzdyBankovniSpojeni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence bankovni-ucet-pokladna (Bankovní účty a pokladny) Formats.
     *
     * @var array
     */
    public static $bankovniUcetPokladna = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence bankovni-ucet-sklad-pokladna (Banky/pokladny/sklady) Formats.
     *
     * @var array
     */
    public static $bankovniUcetSkladPokladna = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenova-uroven (Cenové úrovně) Formats.
     *
     * @var array
     */
    public static $cenovaUroven = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Formats.
     *
     * @var array
     */
    public static $odberatel = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenik (Ceník) Formats.
     *
     * @var array
     */
    public static $cenik = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Formats.
     *
     * @var array
     */
    public static $cenikovaSkupina = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Formats.
     *
     * @var array
     */
    public static $certifikacniAutorita = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence certifikat (Certifikáty) Formats.
     *
     * @var array
     */
    public static $certifikat = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence danovy-naklad (Daňové náklady) Formats.
     *
     * @var array
     */
    public static $danovyNaklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence danovy-odpis (Daňové odpisy) Formats.
     *
     * @var array
     */
    public static $danovyOdpis = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Formats.
     *
     * @var array
     */
    public static $intrastatDodaciPodminky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Formats.
     *
     * @var array
     */
    public static $dodavatelskaSmlouva = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dodavatel (Dodavatelé) Formats.
     *
     * @var array
     */
    public static $dodavatel = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Formats.
     *
     * @var array
     */
    public static $radaBanka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Formats.
     *
     * @var array
     */
    public static $radaInternihoDokladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Formats.
     *
     * @var array
     */
    public static $radaPohledavky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Formats.
     *
     * @var array
     */
    public static $radaPokladniPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Formats.
     *
     * @var array
     */
    public static $radaFakturyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Formats.
     *
     * @var array
     */
    public static $radaNabidkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Formats.
     *
     * @var array
     */
    public static $radaObjednavkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Formats.
     *
     * @var array
     */
    public static $radaPoptavkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Formats.
     *
     * @var array
     */
    public static $radaSkladovyPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Formats.
     *
     * @var array
     */
    public static $radaFakturyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Formats.
     *
     * @var array
     */
    public static $radaNabidkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Formats.
     *
     * @var array
     */
    public static $radaObjednavkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Formats.
     *
     * @var array
     */
    public static $radaPoptavkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Formats.
     *
     * @var array
     */
    public static $radaZavazku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence doklad-k-uhrade (Doklady k úhradě) Formats.
     *
     * @var array
     */
    public static $dokladKUhrade = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Formats.
     *
     * @var array
     */
    public static $intrastatDruhDopravy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dite (Dítě) Formats.
     *
     * @var array
     */
    public static $dite = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Formats.
     *
     * @var array
     */
    public static $cenikObal = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence forma-dopravy (Formy dopravy) Formats.
     *
     * @var array
     */
    public static $formaDopravy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence forma-uhrady (Formy úhrady) Formats.
     *
     * @var array
     */
    public static $formaUhrady = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence osoba-hlavicka (Hlavičky osob) Formats.
     *
     * @var array
     */
    public static $osobaHlavicka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Formats.
     *
     * @var array
     */
    public static $hlavniKniha = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence individualni-cenik (Individuální ceník) Formats.
     *
     * @var array
     */
    public static $individualniCenik = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence insight (Insight) Formats.
     *
     * @var array
     */
    public static $insight = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence interni-doklad (Interní doklady) Formats.
     *
     * @var array
     */
    public static $interniDoklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence inventura (Inventury) Formats.
     *
     * @var array
     */
    public static $inventura = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence certifikat-finbricks (Klíče Finbricks) Formats.
     *
     * @var array
     */
    public static $certifikatFinbricks = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence konst-symbol (Konstantní symboly) Formats.
     *
     * @var array
     */
    public static $konstSymbol = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence kontakt (Kontakty) Formats.
     *
     * @var array
     */
    public static $kontakt = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Formats.
     *
     * @var array
     */
    public static $intrastatKrajUrceni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence kurz (Kurzy) Formats.
     *
     * @var array
     */
    public static $kurz = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Formats.
     *
     * @var array
     */
    public static $intrastatKurz = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Formats.
     *
     * @var array
     */
    public static $kurzProCenotvorbu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence kurz-pro-preceneni (Kurzy pro přecenění) Formats.
     *
     * @var array
     */
    public static $kurzProPreceneni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence kusovnik (Kusovník) Formats.
     *
     * @var array
     */
    public static $kusovnik = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Formats.
     *
     * @var array
     */
    public static $intrastatKodNomenklatury = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence leasing (Leasing) Formats.
     *
     * @var array
     */
    public static $leasing = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence majetek (Majetek) Formats.
     *
     * @var array
     */
    public static $majetek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence mapovani-skladu (Mapování skladů) Formats.
     *
     * @var array
     */
    public static $mapovaniSkladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Formats.
     *
     * @var array
     */
    public static $mzdovaSlozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence misto-urceni (Místa určení) Formats.
     *
     * @var array
     */
    public static $mistoUrceni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence mena (Měny) Formats.
     *
     * @var array
     */
    public static $mena = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Formats.
     *
     * @var array
     */
    public static $intrastatMernaJednotka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Formats.
     *
     * @var array
     */
    public static $mernaJednotka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nastaveni (Nastavení) Formats.
     *
     * @var array
     */
    public static $nastaveni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vazebni-doklad (Navázané doklady) Formats.
     *
     * @var array
     */
    public static $vazebniDoklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nepritomnost (Nepřítomnost) Formats.
     *
     * @var array
     */
    public static $nepritomnost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence po-splatnosti (Neuhrazené pohledávky/závazky po splatnosti) Formats.
     *
     * @var array
     */
    public static $poSplatnosti = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence naklad (Náklady na události / aktivity) Formats.
     *
     * @var array
     */
    public static $naklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
    public static $cenikovyPohybNakup = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
    public static $cenikovyPohybProdej = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Formats.
     *
     * @var array
     */
    public static $intrastatObchodniTransakce = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence strom-koren (Obecný strom) Formats.
     *
     * @var array
     */
    public static $stromKoren = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Formats.
     *
     * @var array
     */
    public static $obratovaPredvaha = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence obrat (Obraty) Formats.
     *
     * @var array
     */
    public static $obrat = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence smlouva (Odběratelské smlouvy) Formats.
     *
     * @var array
     */
    public static $smlouva = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Formats.
     *
     * @var array
     */
    public static $odpisovaSkupina = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence uzivatel (Osoby a uživatelé) Formats.
     *
     * @var array
     */
    public static $uzivatel = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pohledavka (Ostatní pohledávky) Formats.
     *
     * @var array
     */
    public static $pohledavka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zavazek (Ostatní závazky) Formats.
     *
     * @var array
     */
    public static $zavazek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Formats.
     *
     * @var array
     */
    public static $uzivatelskyDotazParametr = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Formats.
     *
     * @var array
     */
    public static $penezniUstav = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence osoba (Personalistika) Formats.
     *
     * @var array
     */
    public static $osoba = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence podklady-dph (Podklady DPH) Formats.
     *
     * @var array
     */
    public static $podkladyDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence podobne-zbozi (Podobné) Formats.
     *
     * @var array
     */
    public static $podobneZbozi = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Formats.
     *
     * @var array
     */
    public static $pohybNaUctech = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pokladni-pohyb (Pokladna) Formats.
     *
     * @var array
     */
    public static $pokladniPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Formats.
     *
     * @var array
     */
    public static $parametr = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Formats.
     *
     * @var array
     */
    public static $prikazKInkasuPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Formats.
     *
     * @var array
     */
    public static $prikazKUhradePolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Formats.
     *
     * @var array
     */
    public static $interniDokladPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence inventura-polozka (Položky inventur) Formats.
     *
     * @var array
     */
    public static $inventuraPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence obrat-polozky (Položky obratů) Formats.
     *
     * @var array
     */
    public static $obratPolozky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Formats.
     *
     * @var array
     */
    public static $pohledavkaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Formats.
     *
     * @var array
     */
    public static $zavazekPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Formats.
     *
     * @var array
     */
    public static $pokladniPohybPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Formats.
     *
     * @var array
     */
    public static $nabidkaPrijataPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Formats.
     *
     * @var array
     */
    public static $objednavkaPrijataPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Formats.
     *
     * @var array
     */
    public static $fakturaPrijataPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Formats.
     *
     * @var array
     */
    public static $poptavkaPrijataPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Formats.
     *
     * @var array
     */
    public static $skladovyPohybPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence smlouva-polozka (Položky smluv) Formats.
     *
     * @var array
     */
    public static $smlouvaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Formats.
     *
     * @var array
     */
    public static $nabidkaVydanaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Formats.
     *
     * @var array
     */
    public static $objednavkaVydanaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Formats.
     *
     * @var array
     */
    public static $poptavkaVydanaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Formats.
     *
     * @var array
     */
    public static $fakturaVydanaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Formats.
     *
     * @var array
     */
    public static $bankaPolozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence poplatek (Poplatky) Formats.
     *
     * @var array
     */
    public static $poplatek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence psc (Poštovní směrovací čísla) Formats.
     *
     * @var array
     */
    public static $psc = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Formats.
     *
     * @var array
     */
    public static $pracovniPomer = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Formats.
     *
     * @var array
     */
    public static $pracovniPomerHlavicka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prodejka (Prodejní kasa) Formats.
     *
     * @var array
     */
    public static $prodejka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prace (Práce pro střediska) Formats.
     *
     * @var array
     */
    public static $prace = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prace-mesic (Práce pro střediska) Formats.
     *
     * @var array
     */
    public static $praceMesic = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Formats.
     *
     * @var array
     */
    public static $pravoViditelnosti = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence text (Předdefinované texty) Formats.
     *
     * @var array
     */
    public static $text = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Formats.
     *
     * @var array
     */
    public static $predpisZauctovani = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence doklad (Přehled všech dokladů) Formats.
     *
     * @var array
     */
    public static $doklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prehled-zamestnancu (Přehled zaměstnanců) Formats.
     *
     * @var array
     */
    public static $prehledZamestnancu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence faktura-prijata (Přijaté faktury) Formats.
     *
     * @var array
     */
    public static $fakturaPrijata = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Formats.
     *
     * @var array
     */
    public static $nabidkaPrijata = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Formats.
     *
     * @var array
     */
    public static $objednavkaPrijata = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Formats.
     *
     * @var array
     */
    public static $poptavkaPrijata = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Formats.
     *
     * @var array
     */
    public static $skladovyPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Formats.
     *
     * @var array
     */
    public static $prikazKInkasu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Formats.
     *
     * @var array
     */
    public static $prikazKUhrade = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence priloha (Příloha) Formats.
     *
     * @var array
     */
    public static $priloha = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prislustenstvi (Příslušenství) Formats.
     *
     * @var array
     */
    public static $prislustenstvi = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rezervace (Rezervace) Formats.
     *
     * @var array
     */
    public static $rezervace = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Formats.
     *
     * @var array
     */
    public static $rocniRada = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sady-a-komplety (Sady) Formats.
     *
     * @var array
     */
    public static $sadyAKomplety = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence saldo (Saldo) Formats.
     *
     * @var array
     */
    public static $saldo = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sazba-dph (Sazby DPH) Formats.
     *
     * @var array
     */
    public static $sazbaDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Formats.
     *
     * @var array
     */
    public static $dashboardSharing = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Formats.
     *
     * @var array
     */
    public static $bankovniUcet = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pokladna (Seznam pokladen) Formats.
     *
     * @var array
     */
    public static $pokladna = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Formats.
     *
     * @var array
     */
    public static $typProdejky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sestava (Seznam sestav) Formats.
     *
     * @var array
     */
    public static $sestava = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sklad (Seznam skladů) Formats.
     *
     * @var array
     */
    public static $sklad = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Formats.
     *
     * @var array
     */
    public static $preneseniDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skladova-karta (Skladové karty) Formats.
     *
     * @var array
     */
    public static $skladovaKarta = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skupina-atributu (Skupiny atributů) Formats.
     *
     * @var array
     */
    public static $skupinaAtributu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skupina-firem (Skupiny firem) Formats.
     *
     * @var array
     */
    public static $skupinaFirem = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skupina-osob (Skupiny osob) Formats.
     *
     * @var array
     */
    public static $skupinaOsob = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Formats.
     *
     * @var array
     */
    public static $skupinaZbozi = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence skupina-stitku (Skupiny štítků) Formats.
     *
     * @var array
     */
    public static $skupinaStitku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence smena (Směny) Formats.
     *
     * @var array
     */
    public static $smena = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence souhrnne-hlaseni-dph (Souhrnné hlášení k DPH) Formats.
     *
     * @var array
     */
    public static $souhrnneHlaseniDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Formats.
     *
     * @var array
     */
    public static $rozvahaPoUctech = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vysledovka-po-uctech (Soupis nákladů a výnosů) Formats.
     *
     * @var array
     */
    public static $vysledovkaPoUctech = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence splatkovy-kalendar (Splátkový kalendář) Formats.
     *
     * @var array
     */
    public static $splatkovyKalendar = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dashboard-panel (Správa přehledů) Formats.
     *
     * @var array
     */
    public static $dashboardPanel = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence srazka (Srážka) Formats.
     *
     * @var array
     */
    public static $srazka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence standardni-predpis (Standardní předpis sestavy) Formats.
     *
     * @var array
     */
    public static $standardniPredpis = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Formats.
     *
     * @var array
     */
    public static $ucetniOsnova = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-obchodniho-dokladu (Stav obchodního dokladu) Formats.
     *
     * @var array
     */
    public static $stavObchodnihoDokladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Formats.
     *
     * @var array
     */
    public static $stavSkladuKDatu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Formats.
     *
     * @var array
     */
    public static $saldoKDatu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-smlouvy (Stavy smluv) Formats.
     *
     * @var array
     */
    public static $stavSmlouvy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-zakazky (Stavy zakázek) Formats.
     *
     * @var array
     */
    public static $stavZakazky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-uctu (Stavy účtů) Formats.
     *
     * @var array
     */
    public static $stavUctu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Formats.
     *
     * @var array
     */
    public static $stalaMzdovaSlozka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stat (Státy) Formats.
     *
     * @var array
     */
    public static $stat = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stredisko (Střediska) Formats.
     *
     * @var array
     */
    public static $stredisko = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence subjekt (Subjekt) Formats.
     *
     * @var array
     */
    public static $subjekt = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sumace-sestavy (Sumace v sestavách) Formats.
     *
     * @var array
     */
    public static $sumaceSestavy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-organizace (Typ organizace) Formats.
     *
     * @var array
     */
    public static $typOrganizace = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Formats.
     *
     * @var array
     */
    public static $typPracovnihoPomeru = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cenik-typ-sazby-dph (Typ sazby DPH) Formats.
     *
     * @var array
     */
    public static $cenikTypSazbyDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-atributu (Typy atributů) Formats.
     *
     * @var array
     */
    public static $typAtributu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Formats.
     *
     * @var array
     */
    public static $typBanka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Formats.
     *
     * @var array
     */
    public static $dodavatelskyTypSmlouvy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-dokladu (Typy dokladů) Formats.
     *
     * @var array
     */
    public static $typDokladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Formats.
     *
     * @var array
     */
    public static $typInternihoDokladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-leasingu (Typy leasingů) Formats.
     *
     * @var array
     */
    public static $typLeasingu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-majetku (Typy majetků) Formats.
     *
     * @var array
     */
    public static $typMajetku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Formats.
     *
     * @var array
     */
    public static $typNakladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Formats.
     *
     * @var array
     */
    public static $typSmlouvy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Formats.
     *
     * @var array
     */
    public static $typPohledavky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Formats.
     *
     * @var array
     */
    public static $typZavazku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Formats.
     *
     * @var array
     */
    public static $typPokladniPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Formats.
     *
     * @var array
     */
    public static $typFakturyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Formats.
     *
     * @var array
     */
    public static $typNabidkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Formats.
     *
     * @var array
     */
    public static $typObjednavkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Formats.
     *
     * @var array
     */
    public static $typPoptavkyPrijate = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Formats.
     *
     * @var array
     */
    public static $typSkladovyPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Formats.
     *
     * @var array
     */
    public static $typAktivity = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Formats.
     *
     * @var array
     */
    public static $typUzivatelskeVazby = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Formats.
     *
     * @var array
     */
    public static $typFakturyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Formats.
     *
     * @var array
     */
    public static $typNabidkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Formats.
     *
     * @var array
     */
    public static $typObjednavkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Formats.
     *
     * @var array
     */
    public static $typPoptavkyVydane = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-zakazky (Typy zakázek) Formats.
     *
     * @var array
     */
    public static $typZakazky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Formats.
     *
     * @var array
     */
    public static $typVzajemnychZapoctu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence majetek-udalost (Události) Formats.
     *
     * @var array
     */
    public static $majetekUdalost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence udalost (Události, aktivity) Formats.
     *
     * @var array
     */
    public static $udalost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ulozene-priznani-dph (Uložené přiznání DPH) Formats.
     *
     * @var array
     */
    public static $ulozenePriznaniDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Formats.
     *
     * @var array
     */
    public static $radekPriznaniDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni (Umístění) Formats.
     *
     * @var array
     */
    public static $umisteni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Formats.
     *
     * @var array
     */
    public static $umisteniVeSkladu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Formats.
     *
     * @var array
     */
    public static $umisteniVeSkladuRegal = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Formats.
     *
     * @var array
     */
    public static $umisteniVeSkladuPolice = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Formats.
     *
     * @var array
     */
    public static $umisteniVeSkladuMistnost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sablona-upominky (Upomínky) Formats.
     *
     * @var array
     */
    public static $sablonaUpominky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence umisteni-uctu (Upřesnění umístění účtu) Formats.
     *
     * @var array
     */
    public static $umisteniUctu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence strom (Uzel stromu) Formats.
     *
     * @var array
     */
    public static $strom = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Formats.
     *
     * @var array
     */
    public static $uzivatelskyDotaz = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sablona-mail (Uživatelské e-mailové šablony) Formats.
     *
     * @var array
     */
    public static $sablonaMail = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence filtr (Uživatelské filtry) Formats.
     *
     * @var array
     */
    public static $filtr = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence report (Uživatelské reporty) Formats.
     *
     * @var array
     */
    public static $report = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence role (Uživatelské role) Formats.
     *
     * @var array
     */
    public static $role = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence custom-button (Uživatelské tlačítko) Formats.
     *
     * @var array
     */
    public static $customButton = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence xslt (Uživatelské transformace) Formats.
     *
     * @var array
     */
    public static $xslt = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Formats.
     *
     * @var array
     */
    public static $uzivatelskaVazba = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Formats.
     *
     * @var array
     */
    public static $stromCenik = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vazba (Vazby dokladu) Formats.
     *
     * @var array
     */
    public static $vazba = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Formats.
     *
     * @var array
     */
    public static $uzivatelskyDotazVlastnost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence faktura-vydana (Vydané faktury) Formats.
     *
     * @var array
     */
    public static $fakturaVydana = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Formats.
     *
     * @var array
     */
    public static $nabidkaVydana = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Formats.
     *
     * @var array
     */
    public static $objednavkaVydana = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Formats.
     *
     * @var array
     */
    public static $poptavkaVydana = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Formats.
     *
     * @var array
     */
    public static $hodnoceniZakazky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Formats.
     *
     * @var array
     */
    public static $vzajemnyZapocet = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Formats.
     *
     * @var array
     */
    public static $vykazHospodareni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Formats.
     *
     * @var array
     */
    public static $vyrobniCislo = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zakazka (Zakázky) Formats.
     *
     * @var array
     */
    public static $zakazka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zamek (Zamykání období) Formats.
     *
     * @var array
     */
    public static $zamek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Formats.
     *
     * @var array
     */
    public static $formaUhradyZauctovani = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Formats.
     *
     * @var array
     */
    public static $intrastatZvlastniPohyb = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zapujcka (Zápůjčky) Formats.
     *
     * @var array
     */
    public static $zapujcka = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence rada (dokladové řady) Formats.
     *
     * @var array
     */
    public static $rada = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence prodejka-platba (Úhrada) Formats.
     *
     * @var array
     */
    public static $prodejkaPlatba = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence global-store (Úložiště globálního nastavení) Formats.
     *
     * @var array
     */
    public static $globalStore = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence setting-store (Úložiště nastavení) Formats.
     *
     * @var array
     */
    public static $settingStore = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Formats.
     *
     * @var array
     */
    public static $analyzaZakazky = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucetni-denik (Účetní deník) Formats.
     *
     * @var array
     */
    public static $ucetniDenik = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucetni-denik-zjednoduseny (Účetní deník - zjednodušený) Formats.
     *
     * @var array
     */
    public static $ucetniDenikZjednoduseny = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucetni-obdobi (Účetní období) Formats.
     *
     * @var array
     */
    public static $ucetniObdobi = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucetni-odpis (Účetní odpisy) Formats.
     *
     * @var array
     */
    public static $ucetniOdpis = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ucet (Účtový rozvrh) Formats.
     *
     * @var array
     */
    public static $ucet = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cinnost (Činnost) Formats.
     *
     * @var array
     */
    public static $cinnost = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Formats.
     *
     * @var array
     */
    public static $ciselnikMzdovychSlozek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
    public static $typStavuCeniku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
    public static $stavCeniku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cislo-baliku (Čísla balíků) Formats.
     *
     * @var array
     */
    public static $cisloBaliku = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence radek-sestavy (Řádek sestavy) Formats.
     *
     * @var array
     */
    public static $radekSestavy = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Formats.
     *
     * @var array
     */
    public static $cleneniKontrolniHlaseni = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence pricteni-rozdilu (Řádky pro přičtení rozdílu) Formats.
     *
     * @var array
     */
    public static $pricteniRozdilu = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Formats.
     *
     * @var array
     */
    public static $cleneniDph = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence sarze-expirace (Šarže a expirace) Formats.
     *
     * @var array
     */
    public static $sarzeExpirace = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence stitek (Štítky) Formats.
     *
     * @var array
     */
    public static $stitek = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence zurnal (Žurnál) Formats.
     *
     * @var array
     */
    public static $zurnal = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
    /**
     * Evidence smlouva-zurnal (Žurnál pro smlouvy) Formats.
     *
     * @var array
     */
    public static $smlouvaZurnal = [
    'HTML' => 'html',
    'XML' => 'xml',
    'JSON' => 'json',
    'CSV' => 'csv',
    ];
}
