<?php
/**
 * FlexiPeeHP - Evidence Formats.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-2019 Spoje.Net
 */
namespace FlexiPeeHP;

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
 static public $version = '2019.2.0.2';


    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     * @var array formats known to flexibee
     */
    static public $formats = [
        'JS' => ['desc' => 'JavaScropt',
            'suffix' => 'js', 'content-type' => 'application/javascript', 'import' => false],
        'PNG' => ['desc' => 'Portable Network Graphics',
            'suffix' => 'png', 'content-type' => 'image/png', 'import' => false],
        'CSS' => ['desc' => 'Kaskádový styl',
            'suffix' => 'css', 'content-type' => 'text/css', 'import' => false],
        'HTML' => ['desc' => 'HTML stránka pro zobrazení informací na webové stránce.',
            'suffix' => 'html', 'content-type' => 'text/html', 'import' => false],
        'XML' => ['desc' => 'Strojově čitelná struktura ve formátu XML.', 'suffix' => 'xml',
            'content-type' => 'application/xml', 'import' => true],
        'JSON' => ['desc' => 'Strojově čitelná struktura ve formátu JSON. ', 'suffix' => 'json',
            'content-type' => 'application/json', 'import' => true],
        'CSV' => ['desc' => 'Tabulkový výstup do formátu CSV (Column Separated Values).',
            'suffix' => 'csv', 'content-type' => 'text/csv', 'import' => true],
        'DBF' => ['desc' => 'Databázový výstup ve formátu DBF (dBase).', 'suffix' => 'dbf',
            'content-type' => 'application/dbf', 'import' => true],
        'XLS' => ['desc' => 'Tabulkový výstup ve formátu Excel.', 'suffix' => 'xls',
            'content-type' => 'application/ms-excel', 'import' => true],
        'ISDOC' => ['desc' => 'e-faktura ISDOC.', 'suffix' => 'isdoc', 'content-type' => 'application/x-isdoc',
            'import' => false],
        'ISDOCx' => ['desc' => 'e-faktura ISDOC s PDF přílohou', 'suffix' => 'isdocx',
            'content-type' => 'application/x-isdocx',
            'import' => false],
        'EDI' => ['desc' => 'Elektronická výměna data (EDI) ve formátu INHOUSE.',
            'suffix' => 'edi', 'content-type' => 'application/x-edi-inhouse', 'import' => 'objednavka-prijata'],
        'PDF' => ['desc' => 'Generování tiskového reportu. Jedná se o stejnou funkci která je dostupná v aplikaci. Export do PDF',
            'suffix' => 'pdf', 'content-type' => 'application/pdf', 'import' => false],
        'vCard' => ['desc' => 'Výstup adresáře do formátu elektronické vizitky vCard.',
            'suffix' => 'vcf', 'content-type' => 'text/vcard', 'import' => false],
        'iCalendar' => ['desc' => 'Výstup do kalendáře ve formátu iCalendar. Lze takto exportovat události, ale také třeba splatnosti u přijatých či vydaných faktur.',
            'suffix' => 'ical', 'content-type' => 'text/calendar', 'import' => false],
        'TEXT' => ['desc' => 'Prostý text', 'suffix' => 'txt',
            'content-type' => 'text/plain', 'import' => false],
        'TTF' => ['desc' => 'TrueType font', 'suffix' => 'ttf',
            'content-type' => 'application/x-font-truetype', 'import' => false],

    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    static public function byContentType()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    static public function bySuffix()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'suffix');
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
 static public $adresar = array (
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
);
    /**
     * Evidence mzda (Aktualizace mezd) Formats.
     *
     * @var array
     */
 static public $mzda = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence analyza-nakupu (Analýza nákupu) Formats.
     *
     * @var array
     */
 static public $analyzaNakupu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence analyza-prodeje (Analýza prodeje) Formats.
     *
     * @var array
     */
 static public $analyzaProdeje = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence atribut (Atributy) Formats.
     *
     * @var array
     */
 static public $atribut = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence banka (Banka) Formats.
     *
     * @var array
     */
 static public $banka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Formats.
     *
     * @var array
     */
 static public $formatElektronickehoBankovnictvi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Formats.
     *
     * @var array
     */
 static public $mzdyBankovniSpojeni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Formats.
     *
     * @var array
     */
 static public $adresarBankovniUcet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Formats.
     *
     * @var array
     */
 static public $cenovaUroven = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Formats.
     *
     * @var array
     */
 static public $odberatel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenik (Ceník) Formats.
     *
     * @var array
     */
 static public $cenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Formats.
     *
     * @var array
     */
 static public $cenikovaSkupina = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Formats.
     *
     * @var array
     */
 static public $certifikacniAutorita = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Formats.
     *
     * @var array
     */
 static public $intrastatDodaciPodminky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Formats.
     *
     * @var array
     */
 static public $dodavatelskaSmlouva = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatel (Dodavatelé) Formats.
     *
     * @var array
     */
 static public $dodavatel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Formats.
     *
     * @var array
     */
 static public $radaBanka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Formats.
     *
     * @var array
     */
 static public $radaInternihoDokladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Formats.
     *
     * @var array
     */
 static public $radaPohledavky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Formats.
     *
     * @var array
     */
 static public $radaPokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Formats.
     *
     * @var array
     */
 static public $radaFakturyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Formats.
     *
     * @var array
     */
 static public $radaNabidkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Formats.
     *
     * @var array
     */
 static public $radaObjednavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Formats.
     *
     * @var array
     */
 static public $radaPoptavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Formats.
     *
     * @var array
     */
 static public $radaSkladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Formats.
     *
     * @var array
     */
 static public $radaFakturyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Formats.
     *
     * @var array
     */
 static public $radaNabidkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Formats.
     *
     * @var array
     */
 static public $radaObjednavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Formats.
     *
     * @var array
     */
 static public $radaPoptavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Formats.
     *
     * @var array
     */
 static public $radaZavazku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Formats.
     *
     * @var array
     */
 static public $intrastatDruhDopravy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dite (Dítě) Formats.
     *
     * @var array
     */
 static public $dite = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence eet-komunikace (EET komunikace) Formats.
     *
     * @var array
     */
 static public $eetKomunikace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Formats.
     *
     * @var array
     */
 static public $cenikObal = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Formats.
     *
     * @var array
     */
 static public $formaDopravy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Formats.
     *
     * @var array
     */
 static public $formaUhrady = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence osoba-hlavicka (Hlavičky osob) Formats.
     *
     * @var array
     */
 static public $osobaHlavicka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Formats.
     *
     * @var array
     */
 static public $hlavniKniha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence individualni-cenik (Individuální ceník) Formats.
     *
     * @var array
     */
 static public $individualniCenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence insight (Insight) Formats.
     *
     * @var array
     */
 static public $insight = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence interni-doklad (Interní doklady) Formats.
     *
     * @var array
     */
 static public $interniDoklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence inventura (Inventury) Formats.
     *
     * @var array
     */
 static public $inventura = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Formats.
     *
     * @var array
     */
 static public $konstSymbol = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kontakt (Kontakty) Formats.
     *
     * @var array
     */
 static public $kontakt = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Formats.
     *
     * @var array
     */
 static public $intrastatKrajUrceni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kurz (Kurzy) Formats.
     *
     * @var array
     */
 static public $kurz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Formats.
     *
     * @var array
     */
 static public $intrastatKurz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Formats.
     *
     * @var array
     */
 static public $kurzProCenotvorbu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Formats.
     *
     * @var array
     */
 static public $intrastatKodNomenklatury = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence leasing (Leasing) Formats.
     *
     * @var array
     */
 static public $leasing = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence majetek (Majetek) Formats.
     *
     * @var array
     */
 static public $majetek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Formats.
     *
     * @var array
     */
 static public $mapovaniSkladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Formats.
     *
     * @var array
     */
 static public $mzdovaSlozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence misto-urceni (Místa určení) Formats.
     *
     * @var array
     */
 static public $mistoUrceni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mena (Měny) Formats.
     *
     * @var array
     */
 static public $mena = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Formats.
     *
     * @var array
     */
 static public $intrastatMernaJednotka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Formats.
     *
     * @var array
     */
 static public $mernaJednotka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nastaveni (Nastavení) Formats.
     *
     * @var array
     */
 static public $nastaveni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nepritomnost (Nepřítomnost) Formats.
     *
     * @var array
     */
 static public $nepritomnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Formats.
     *
     * @var array
     */
 static public $naklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
 static public $cenikovyPohybNakup = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
 static public $cenikovyPohybProdej = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Formats.
     *
     * @var array
     */
 static public $intrastatObchodniTransakce = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom-koren (Obecný strom) Formats.
     *
     * @var array
     */
 static public $stromKoren = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Formats.
     *
     * @var array
     */
 static public $obratovaPredvaha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence obrat (Obraty) Formats.
     *
     * @var array
     */
 static public $obrat = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Formats.
     *
     * @var array
     */
 static public $smlouva = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Formats.
     *
     * @var array
     */
 static public $odpisovaSkupina = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatel (Osoby a uživatelé) Formats.
     *
     * @var array
     */
 static public $uzivatel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Formats.
     *
     * @var array
     */
 static public $pohledavka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zavazek (Ostatní závazky) Formats.
     *
     * @var array
     */
 static public $zavazek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Formats.
     *
     * @var array
     */
 static public $uzivatelskyDotazParametr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Formats.
     *
     * @var array
     */
 static public $penezniUstav = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence osoba (Personalistika) Formats.
     *
     * @var array
     */
 static public $osoba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence podklady-dph (Podklady DPH) Formats.
     *
     * @var array
     */
 static public $podkladyDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence podobne-zbozi (Podobné) Formats.
     *
     * @var array
     */
 static public $podobneZbozi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Formats.
     *
     * @var array
     */
 static public $pohybNaUctech = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Formats.
     *
     * @var array
     */
 static public $pokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Formats.
     *
     * @var array
     */
 static public $parametr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Formats.
     *
     * @var array
     */
 static public $prikazKInkasuPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Formats.
     *
     * @var array
     */
 static public $prikazKUhradePolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Formats.
     *
     * @var array
     */
 static public $interniDokladPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence inventura-polozka (Položky inventur) Formats.
     *
     * @var array
     */
 static public $inventuraPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Formats.
     *
     * @var array
     */
 static public $pohledavkaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Formats.
     *
     * @var array
     */
 static public $zavazekPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Formats.
     *
     * @var array
     */
 static public $pokladniPohybPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Formats.
     *
     * @var array
     */
 static public $nabidkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Formats.
     *
     * @var array
     */
 static public $objednavkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Formats.
     *
     * @var array
     */
 static public $fakturaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Formats.
     *
     * @var array
     */
 static public $poptavkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Formats.
     *
     * @var array
     */
 static public $skladovyPohybPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Formats.
     *
     * @var array
     */
 static public $smlouvaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Formats.
     *
     * @var array
     */
 static public $nabidkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Formats.
     *
     * @var array
     */
 static public $objednavkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Formats.
     *
     * @var array
     */
 static public $poptavkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Formats.
     *
     * @var array
     */
 static public $fakturaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Formats.
     *
     * @var array
     */
 static public $bankaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poplatek (Poplatky) Formats.
     *
     * @var array
     */
 static public $poplatek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence psc (Poštovní směrovací čísla) Formats.
     *
     * @var array
     */
 static public $psc = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Formats.
     *
     * @var array
     */
 static public $pracovniPomerHlavicka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Formats.
     *
     * @var array
     */
 static public $pracovniPomer = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prodejka (Prodejní kasa) Formats.
     *
     * @var array
     */
 static public $prodejka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prace (Práce pro střediska) Formats.
     *
     * @var array
     */
 static public $prace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prace-mesic (Práce pro střediska) Formats.
     *
     * @var array
     */
 static public $praceMesic = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Formats.
     *
     * @var array
     */
 static public $pravoViditelnosti = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence text (Předdefinované texty) Formats.
     *
     * @var array
     */
 static public $text = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Formats.
     *
     * @var array
     */
 static public $predpisZauctovani = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prehled-zamestnancu (Přehled zaměstnanců) Formats.
     *
     * @var array
     */
 static public $prehledZamestnancu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Formats.
     *
     * @var array
     */
 static public $fakturaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Formats.
     *
     * @var array
     */
 static public $nabidkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Formats.
     *
     * @var array
     */
 static public $objednavkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Formats.
     *
     * @var array
     */
 static public $poptavkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Formats.
     *
     * @var array
     */
 static public $skladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Formats.
     *
     * @var array
     */
 static public $prikazKInkasu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Formats.
     *
     * @var array
     */
 static public $prikazKUhrade = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence priloha (Příloha) Formats.
     *
     * @var array
     */
 static public $priloha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prislustenstvi (Příslušenství) Formats.
     *
     * @var array
     */
 static public $prislustenstvi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rezervace (Rezervace) Formats.
     *
     * @var array
     */
 static public $rezervace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Formats.
     *
     * @var array
     */
 static public $rocniRada = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sady-a-komplety (Sady) Formats.
     *
     * @var array
     */
 static public $sadyAKomplety = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence saldo (Saldo) Formats.
     *
     * @var array
     */
 static public $saldo = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sazba-dph (Sazby DPH) Formats.
     *
     * @var array
     */
 static public $sazbaDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Formats.
     *
     * @var array
     */
 static public $dashboardSharing = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Formats.
     *
     * @var array
     */
 static public $bankovniUcet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladna (Seznam pokladen) Formats.
     *
     * @var array
     */
 static public $pokladna = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Formats.
     *
     * @var array
     */
 static public $typProdejky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sklad (Seznam skladů) Formats.
     *
     * @var array
     */
 static public $sklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Formats.
     *
     * @var array
     */
 static public $preneseniDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladova-karta (Skladové karty) Formats.
     *
     * @var array
     */
 static public $skladovaKarta = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Formats.
     *
     * @var array
     */
 static public $skupinaAtributu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-firem (Skupiny firem) Formats.
     *
     * @var array
     */
 static public $skupinaFirem = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-osob (Skupiny osob) Formats.
     *
     * @var array
     */
 static public $skupinaOsob = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Formats.
     *
     * @var array
     */
 static public $skupinaZbozi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Formats.
     *
     * @var array
     */
 static public $skupinaStitku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence smena (Směny) Formats.
     *
     * @var array
     */
 static public $smena = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Formats.
     *
     * @var array
     */
 static public $rozvahaPoUctech = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Formats.
     *
     * @var array
     */
 static public $dashboardPanel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence srazka (Srážka) Formats.
     *
     * @var array
     */
 static public $srazka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Formats.
     *
     * @var array
     */
 static public $ucetniOsnova = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Formats.
     *
     * @var array
     */
 static public $stavSkladuKDatu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Formats.
     *
     * @var array
     */
 static public $saldoKDatu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Formats.
     *
     * @var array
     */
 static public $stavSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Formats.
     *
     * @var array
     */
 static public $stavZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-uctu (Stavy účtů) Formats.
     *
     * @var array
     */
 static public $stavUctu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Formats.
     *
     * @var array
     */
 static public $stalaMzdovaSlozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stat (Státy) Formats.
     *
     * @var array
     */
 static public $stat = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stredisko (Střediska) Formats.
     *
     * @var array
     */
 static public $stredisko = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence subjekt (Subjekt) Formats.
     *
     * @var array
     */
 static public $subjekt = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-organizace (Typ organizace) Formats.
     *
     * @var array
     */
 static public $typOrganizace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Formats.
     *
     * @var array
     */
 static public $typPracovnihoPomeru = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-atributu (Typy atributů) Formats.
     *
     * @var array
     */
 static public $typAtributu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Formats.
     *
     * @var array
     */
 static public $typBanka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Formats.
     *
     * @var array
     */
 static public $dodavatelskyTypSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Formats.
     *
     * @var array
     */
 static public $typInternihoDokladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Formats.
     *
     * @var array
     */
 static public $typLeasingu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-majetku (Typy majetků) Formats.
     *
     * @var array
     */
 static public $typMajetku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Formats.
     *
     * @var array
     */
 static public $typNakladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Formats.
     *
     * @var array
     */
 static public $typSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Formats.
     *
     * @var array
     */
 static public $typPohledavky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Formats.
     *
     * @var array
     */
 static public $typZavazku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Formats.
     *
     * @var array
     */
 static public $typPokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Formats.
     *
     * @var array
     */
 static public $typFakturyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Formats.
     *
     * @var array
     */
 static public $typNabidkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Formats.
     *
     * @var array
     */
 static public $typObjednavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Formats.
     *
     * @var array
     */
 static public $typPoptavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Formats.
     *
     * @var array
     */
 static public $typSkladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Formats.
     *
     * @var array
     */
 static public $typAktivity = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Formats.
     *
     * @var array
     */
 static public $typUzivatelskeVazby = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Formats.
     *
     * @var array
     */
 static public $typFakturyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Formats.
     *
     * @var array
     */
 static public $typNabidkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Formats.
     *
     * @var array
     */
 static public $typObjednavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Formats.
     *
     * @var array
     */
 static public $typPoptavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Formats.
     *
     * @var array
     */
 static public $typZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Formats.
     *
     * @var array
     */
 static public $typVzajemnychZapoctu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence majetek-udalost (Události) Formats.
     *
     * @var array
     */
 static public $majetekUdalost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence udalost (Události, aktivity) Formats.
     *
     * @var array
     */
 static public $udalost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni (Umístění) Formats.
     *
     * @var array
     */
 static public $umisteni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Formats.
     *
     * @var array
     */
 static public $umisteniVeSkladuRegal = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Formats.
     *
     * @var array
     */
 static public $umisteniVeSkladuMistnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Formats.
     *
     * @var array
     */
 static public $umisteniVeSkladuPolice = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Formats.
     *
     * @var array
     */
 static public $umisteniVeSkladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sablona-upominky (Upomínky) Formats.
     *
     * @var array
     */
 static public $sablonaUpominky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom (Uzel stromu) Formats.
     *
     * @var array
     */
 static public $strom = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Formats.
     *
     * @var array
     */
 static public $uzivatelskyDotaz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence filtr (Uživatelské filtry) Formats.
     *
     * @var array
     */
 static public $filtr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Formats.
     *
     * @var array
     */
 static public $customButton = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence xslt (Uživatelské transformace) Formats.
     *
     * @var array
     */
 static public $xslt = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Formats.
     *
     * @var array
     */
 static public $uzivatelskaVazba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Formats.
     *
     * @var array
     */
 static public $stromCenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vazba (Vazby dokladu) Formats.
     *
     * @var array
     */
 static public $vazba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Formats.
     *
     * @var array
     */
 static public $uzivatelskyDotazVlastnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Formats.
     *
     * @var array
     */
 static public $fakturaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Formats.
     *
     * @var array
     */
 static public $nabidkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Formats.
     *
     * @var array
     */
 static public $objednavkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Formats.
     *
     * @var array
     */
 static public $poptavkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Formats.
     *
     * @var array
     */
 static public $hodnoceniZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Formats.
     *
     * @var array
     */
 static public $vzajemnyZapocet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence danova-evidence (Výkaz daňové evidence) Formats.
     *
     * @var array
     */
 static public $danovaEvidence = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Formats.
     *
     * @var array
     */
 static public $vykazHospodareni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Formats.
     *
     * @var array
     */
 static public $vyrobniCislo = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zakazka (Zakázky) Formats.
     *
     * @var array
     */
 static public $zakazka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Formats.
     *
     * @var array
     */
 static public $formaUhradyZauctovani = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Formats.
     *
     * @var array
     */
 static public $intrastatZvlastniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zapujcka (Zápůjčky) Formats.
     *
     * @var array
     */
 static public $zapujcka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada (dokladové řady) Formats.
     *
     * @var array
     */
 static public $rada = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prodejka-platba (Úhrada) Formats.
     *
     * @var array
     */
 static public $prodejkaPlatba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence setting-store (Úložiště nastavení) Formats.
     *
     * @var array
     */
 static public $settingStore = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Formats.
     *
     * @var array
     */
 static public $analyzaZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-denik (Účetní deník) Formats.
     *
     * @var array
     */
 static public $ucetniDenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-obdobi (Účetní období) Formats.
     *
     * @var array
     */
 static public $ucetniObdobi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucet (Účtový rozvrh) Formats.
     *
     * @var array
     */
 static public $ucet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cinnost (Činnost) Formats.
     *
     * @var array
     */
 static public $cinnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Formats.
     *
     * @var array
     */
 static public $ciselnikMzdovychSlozek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
 static public $stavCeniku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
 static public $typStavuCeniku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Formats.
     *
     * @var array
     */
 static public $cisloBaliku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Formats.
     *
     * @var array
     */
 static public $cleneniKontrolniHlaseni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Formats.
     *
     * @var array
     */
 static public $cleneniDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stitek (Štítky) Formats.
     *
     * @var array
     */
 static public $stitek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zurnal (Žurnál) Formats.
     *
     * @var array
     */
 static public $zurnal = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
}
