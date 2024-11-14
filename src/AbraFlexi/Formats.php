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
 static public $version = '2024.5.4';


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
            'suffix'=> 'jasper',
            'import'=> false
        ]
    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    static public function byContentType()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    static public function bySuffix()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, 'suffix');
    }

    /**
     * Obtain Suffix for given content
     *
     * @param string $suffix
     * @return string
     */
    static public function suffixToContentType($suffix)
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
    static public function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType();
        return isset($types[$contentType]) ? $types[$contentType]['suffix'] : null;
    }

        /**
     * Evidence adresar (Adresy firem) Formats.
     *
     * @var array
     */
 static public $adresar = [
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
 static public $mzda = [
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
 static public $analyzaNakupu = [
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
 static public $analyzaProdeje = [
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
 static public $atribut = [
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
 static public $autotisk = [
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
 static public $banka = [
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
 static public $formatElektronickehoBankovnictvi = [
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
 static public $adresarBankovniUcet = [
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
 static public $mzdyBankovniSpojeni = [
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
 static public $bankovniUcetPokladna = [
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
 static public $bankovniUcetSkladPokladna = [
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
 static public $cenovaUroven = [
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
 static public $odberatel = [
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
 static public $cenik = [
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
 static public $cenikovaSkupina = [
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
 static public $certifikacniAutorita = [
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
 static public $certifikat = [
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
 static public $danovyNaklad = [
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
 static public $danovyOdpis = [
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
 static public $intrastatDodaciPodminky = [
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
 static public $dodavatelskaSmlouva = [
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
 static public $dodavatel = [
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
 static public $radaBanka = [
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
 static public $radaInternihoDokladu = [
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
 static public $radaPohledavky = [
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
 static public $radaPokladniPohyb = [
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
 static public $radaFakturyPrijate = [
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
 static public $radaNabidkyPrijate = [
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
 static public $radaObjednavkyPrijate = [
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
 static public $radaPoptavkyPrijate = [
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
 static public $radaSkladovyPohyb = [
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
 static public $radaFakturyVydane = [
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
 static public $radaNabidkyVydane = [
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
 static public $radaObjednavkyVydane = [
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
 static public $radaPoptavkyVydane = [
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
 static public $radaZavazku = [
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
 static public $dokladKUhrade = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
    /**
     * Evidence doporuceni (Doporučení) Formats.
     *
     * @var array
     */
 static public $doporuceni = [
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
 static public $intrastatDruhDopravy = [
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
 static public $dite = [
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
 static public $cenikObal = [
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
 static public $formaDopravy = [
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
 static public $formaUhrady = [
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
 static public $osobaHlavicka = [
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
 static public $hlavniKniha = [
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
 static public $individualniCenik = [
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
 static public $insight = [
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
 static public $interniDoklad = [
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
 static public $inventura = [
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
 static public $certifikatFinbricks = [
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
 static public $konstSymbol = [
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
 static public $kontakt = [
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
 static public $intrastatKrajUrceni = [
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
 static public $kurz = [
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
 static public $intrastatKurz = [
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
 static public $kurzProCenotvorbu = [
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
 static public $kurzProPreceneni = [
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
 static public $kusovnik = [
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
 static public $intrastatKodNomenklatury = [
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
 static public $leasing = [
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
 static public $majetek = [
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
 static public $mapovaniSkladu = [
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
 static public $mzdovaSlozka = [
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
 static public $mistoUrceni = [
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
 static public $mena = [
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
 static public $intrastatMernaJednotka = [
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
 static public $mernaJednotka = [
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
 static public $nastaveni = [
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
 static public $vazebniDoklad = [
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
 static public $nepritomnost = [
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
 static public $poSplatnosti = [
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
 static public $naklad = [
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
 static public $cenikovyPohybNakup = [
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
 static public $cenikovyPohybProdej = [
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
 static public $intrastatObchodniTransakce = [
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
 static public $stromKoren = [
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
 static public $obratovaPredvaha = [
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
 static public $obrat = [
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
 static public $smlouva = [
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
 static public $odpisovaSkupina = [
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
 static public $uzivatel = [
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
 static public $pohledavka = [
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
 static public $zavazek = [
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
 static public $uzivatelskyDotazParametr = [
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
 static public $penezniUstav = [
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
 static public $osoba = [
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
 static public $podkladyDph = [
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
 static public $podobneZbozi = [
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
 static public $pohybNaUctech = [
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
 static public $pokladniPohyb = [
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
 static public $parametr = [
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
 static public $prikazKInkasuPolozka = [
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
 static public $prikazKUhradePolozka = [
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
 static public $interniDokladPolozka = [
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
 static public $inventuraPolozka = [
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
 static public $obratPolozky = [
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
 static public $pohledavkaPolozka = [
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
 static public $zavazekPolozka = [
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
 static public $pokladniPohybPolozka = [
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
 static public $nabidkaPrijataPolozka = [
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
 static public $objednavkaPrijataPolozka = [
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
 static public $fakturaPrijataPolozka = [
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
 static public $poptavkaPrijataPolozka = [
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
 static public $skladovyPohybPolozka = [
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
 static public $smlouvaPolozka = [
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
 static public $nabidkaVydanaPolozka = [
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
 static public $objednavkaVydanaPolozka = [
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
 static public $poptavkaVydanaPolozka = [
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
 static public $fakturaVydanaPolozka = [
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
 static public $bankaPolozka = [
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
 static public $poplatek = [
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
 static public $psc = [
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
 static public $pracovniPomer = [
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
 static public $pracovniPomerHlavicka = [
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
 static public $prodejka = [
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
 static public $prace = [
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
 static public $praceMesic = [
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
 static public $pravoViditelnosti = [
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
 static public $text = [
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
 static public $predpisZauctovani = [
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
 static public $doklad = [
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
 static public $prehledZamestnancu = [
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
 static public $fakturaPrijata = [
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
 static public $nabidkaPrijata = [
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
 static public $objednavkaPrijata = [
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
 static public $poptavkaPrijata = [
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
 static public $skladovyPohyb = [
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
 static public $prikazKInkasu = [
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
 static public $prikazKUhrade = [
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
 static public $priloha = [
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
 static public $prislustenstvi = [
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
 static public $rezervace = [
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
 static public $rocniRada = [
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
 static public $sadyAKomplety = [
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
 static public $saldo = [
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
 static public $sazbaDph = [
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
 static public $dashboardSharing = [
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
 static public $bankovniUcet = [
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
 static public $pokladna = [
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
 static public $typProdejky = [
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
 static public $sestava = [
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
 static public $sklad = [
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
 static public $preneseniDph = [
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
 static public $skladovaKarta = [
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
 static public $skupinaAtributu = [
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
 static public $skupinaFirem = [
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
 static public $skupinaOsob = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
    /**
     * Evidence skupina-plneni (Skupiny plnění) Formats.
     *
     * @var array
     */
 static public $skupinaPlneni = [
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
 static public $skupinaZbozi = [
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
 static public $skupinaStitku = [
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
 static public $smena = [
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
 static public $souhrnneHlaseniDph = [
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
 static public $rozvahaPoUctech = [
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
 static public $vysledovkaPoUctech = [
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
 static public $splatkovyKalendar = [
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
 static public $dashboardPanel = [
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
 static public $srazka = [
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
 static public $standardniPredpis = [
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
 static public $ucetniOsnova = [
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
 static public $stavObchodnihoDokladu = [
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
 static public $stavSkladuKDatu = [
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
 static public $saldoKDatu = [
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
 static public $stavSmlouvy = [
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
 static public $stavZakazky = [
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
 static public $stavUctu = [
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
 static public $stalaMzdovaSlozka = [
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
 static public $stat = [
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
 static public $stredisko = [
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
 static public $subjekt = [
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
 static public $sumaceSestavy = [
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
 static public $typOrganizace = [
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
 static public $typPracovnihoPomeru = [
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
 static public $cenikTypSazbyDph = [
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
 static public $typAtributu = [
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
 static public $typBanka = [
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
 static public $dodavatelskyTypSmlouvy = [
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
 static public $typDokladu = [
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
 static public $typInternihoDokladu = [
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
 static public $typLeasingu = [
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
 static public $typMajetku = [
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
 static public $typNakladu = [
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
 static public $typSmlouvy = [
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
 static public $typPohledavky = [
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
 static public $typZavazku = [
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
 static public $typPokladniPohyb = [
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
 static public $typFakturyPrijate = [
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
 static public $typNabidkyPrijate = [
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
 static public $typObjednavkyPrijate = [
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
 static public $typPoptavkyPrijate = [
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
 static public $typSkladovyPohyb = [
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
 static public $typAktivity = [
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
 static public $typUzivatelskeVazby = [
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
 static public $typFakturyVydane = [
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
 static public $typNabidkyVydane = [
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
 static public $typObjednavkyVydane = [
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
 static public $typPoptavkyVydane = [
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
 static public $typZakazky = [
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
 static public $typVzajemnychZapoctu = [
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
 static public $majetekUdalost = [
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
 static public $udalost = [
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
 static public $ulozenePriznaniDph = [
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
 static public $radekPriznaniDph = [
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
 static public $umisteni = [
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
 static public $umisteniVeSkladu = [
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
 static public $umisteniVeSkladuRegal = [
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
 static public $umisteniVeSkladuPolice = [
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
 static public $umisteniVeSkladuMistnost = [
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
 static public $sablonaUpominky = [
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
 static public $umisteniUctu = [
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
 static public $strom = [
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
 static public $uzivatelskyDotaz = [
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
 static public $sablonaMail = [
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
 static public $filtr = [
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
 static public $report = [
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
 static public $role = [
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
 static public $customButton = [
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
 static public $xslt = [
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
 static public $uzivatelskaVazba = [
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
 static public $stromCenik = [
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
 static public $vazba = [
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
 static public $uzivatelskyDotazVlastnost = [
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
 static public $fakturaVydana = [
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
 static public $nabidkaVydana = [
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
 static public $objednavkaVydana = [
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
 static public $poptavkaVydana = [
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
 static public $hodnoceniZakazky = [
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
 static public $vzajemnyZapocet = [
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
 static public $vykazHospodareni = [
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
 static public $vyrobniCislo = [
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
 static public $zakazka = [
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
 static public $zamek = [
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
 static public $formaUhradyZauctovani = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
    /**
     * Evidence changes (Změny) Formats.
     *
     * @var array
     */
 static public $changes = [
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
 static public $intrastatZvlastniPohyb = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
    /**
     * Evidence zaloha-k-odpoctu (Zálohy k odpočtu) Formats.
     *
     * @var array
     */
 static public $zalohaKOdpoctu = [
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
 static public $zapujcka = [
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
 static public $rada = [
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
 static public $prodejkaPlatba = [
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
 static public $globalStore = [
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
 static public $settingStore = [
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
 static public $analyzaZakazky = [
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
 static public $ucetniDenik = [
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
 static public $ucetniDenikZjednoduseny = [
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
 static public $ucetniObdobi = [
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
 static public $ucetniOdpis = [
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
 static public $ucet = [
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
 static public $cinnost = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
    /**
     * Evidence castky-k-odpoctu (Částky k odpočtu) Formats.
     *
     * @var array
     */
 static public $castkyKOdpoctu = [
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
 static public $ciselnikMzdovychSlozek = [
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
 static public $typStavuCeniku = [
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
 static public $stavCeniku = [
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
 static public $cisloBaliku = [
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
 static public $radekSestavy = [
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
 static public $cleneniKontrolniHlaseni = [
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
 static public $pricteniRozdilu = [
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
 static public $cleneniDph = [
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
 static public $sarzeExpirace = [
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
 static public $stitek = [
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
 static public $zurnal = [
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
 static public $smlouvaZurnal = [
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
];
}
