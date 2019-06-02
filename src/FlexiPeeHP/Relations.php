<?php
/**
 * FlexiPeeHP - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

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
 static public $version = '2019.2.0.2';

    /**
     * Evidence adresar (Adresy firem) Relations.
     *
     * @var array
     */
 static public $adresar = array (
  0 => 
  array (
    'url' => 'mistaUrceni',
    'evidenceType' => 'MISTO_URCENI',
    'name' => 'Místa určení',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  2 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  3 => 
  array (
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ),
  4 => 
  array (
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ),
  5 => 
  array (
    'url' => 'kontakty',
    'evidenceType' => 'ADR_KONTAKT',
    'name' => 'Kontakty',
  ),
  6 => 
  array (
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ),
  7 => 
  array (
    'url' => 'smlouvy',
    'evidenceType' => 'SMLOUVA',
    'name' => 'Smlouvy',
  ),
  8 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  9 => 
  array (
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ),
  10 => 
  array (
    'url' => 'bankovniSpojeni',
    'evidenceType' => 'ADR_BANKOVNI_UCET',
    'name' => 'Bankovní spojení',
  ),
);
    /**
     * Evidence atribut (Atributy) Relations.
     *
     * @var array
     */
 static public $atribut = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence banka (Banka) Relations.
     *
     * @var array
     */
 static public $banka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ),
);
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Relations.
     *
     * @var array
     */
 static public $mzdyBankovniSpojeni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Relations.
     *
     * @var array
     */
 static public $adresarBankovniUcet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Relations.
     *
     * @var array
     */
 static public $cenovaUroven = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'skupinyZbozi',
    'evidenceType' => 'SKUPINA_ZBOZI',
    'name' => 'Skupiny zboží',
  ),
  2 => 
  array (
    'url' => 'firmy',
    'evidenceType' => 'ADRESAR',
    'name' => 'Adresář',
  ),
  3 => 
  array (
    'url' => 'skupinyCen',
    'evidenceType' => 'CENIKOVA_SKUPINA',
    'name' => 'Ceníkové skupiny',
  ),
  4 => 
  array (
    'url' => 'ceniky',
    'evidenceType' => 'CENIK',
    'name' => 'Ceníky',
  ),
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Relations.
     *
     * @var array
     */
 static public $odberatel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cenik (Ceník) Relations.
     *
     * @var array
     */
 static public $cenik = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vyrobni-cisla',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  3 => 
  array (
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ),
  4 => 
  array (
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ),
  5 => 
  array (
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ),
  6 => 
  array (
    'url' => 'podobne-zbozi',
    'evidenceType' => 'PODOBNE_ZBOZI',
    'name' => 'Podobné zboží',
  ),
  7 => 
  array (
    'url' => 'poplatky',
    'evidenceType' => 'POPLATKY',
    'name' => 'Poplatky',
  ),
  8 => 
  array (
    'url' => 'sklad-karty',
    'evidenceType' => 'SKLADOVA_KARTA',
    'name' => 'Skladová karta',
  ),
  9 => 
  array (
    'url' => 'sady-a-komplety',
    'evidenceType' => 'SADY_A_KOMPLETY',
    'name' => 'Sady a komplety',
  ),
  10 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  11 => 
  array (
    'url' => 'prislustenstvi',
    'evidenceType' => 'PRISLUSENSTVI',
    'name' => 'Příslušenství',
  ),
  12 => 
  array (
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ),
  13 => 
  array (
    'url' => 'atributy',
    'evidenceType' => 'ATRIBUT',
    'name' => 'Atributy',
  ),
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Relations.
     *
     * @var array
     */
 static public $cenikovaSkupina = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Relations.
     *
     * @var array
     */
 static public $certifikacniAutorita = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Relations.
     *
     * @var array
     */
 static public $intrastatDodaciPodminky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Relations.
     *
     * @var array
     */
 static public $dodavatelskaSmlouva = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ),
);
    /**
     * Evidence dodavatel (Dodavatelé) Relations.
     *
     * @var array
     */
 static public $dodavatel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Relations.
     *
     * @var array
     */
 static public $radaBanka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Relations.
     *
     * @var array
     */
 static public $radaInternihoDokladu = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Relations.
     *
     * @var array
     */
 static public $radaPohledavky = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Relations.
     *
     * @var array
     */
 static public $radaPokladniPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Relations.
     *
     * @var array
     */
 static public $radaFakturyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $radaNabidkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $radaObjednavkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Relations.
     *
     * @var array
     */
 static public $radaPoptavkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Relations.
     *
     * @var array
     */
 static public $radaSkladovyPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Relations.
     *
     * @var array
     */
 static public $radaFakturyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Relations.
     *
     * @var array
     */
 static public $radaNabidkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Relations.
     *
     * @var array
     */
 static public $radaObjednavkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Relations.
     *
     * @var array
     */
 static public $radaPoptavkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Relations.
     *
     * @var array
     */
 static public $radaZavazku = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Relations.
     *
     * @var array
     */
 static public $intrastatDruhDopravy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dite (Dítě) Relations.
     *
     * @var array
     */
 static public $dite = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Relations.
     *
     * @var array
     */
 static public $cenikObal = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Relations.
     *
     * @var array
     */
 static public $formaDopravy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Relations.
     *
     * @var array
     */
 static public $formaUhrady = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'zauctovani',
    'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
    'name' => 'Zaúčtování',
  ),
);
    /**
     * Evidence osoba-hlavicka (Hlavičky osob) Relations.
     *
     * @var array
     */
 static public $osobaHlavicka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence insight (Insight) Relations.
     *
     * @var array
     */
 static public $insight = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence interni-doklad (Interní doklady) Relations.
     *
     * @var array
     */
 static public $interniDoklad = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
    'name' => 'Položky interního dokladu',
  ),
);
    /**
     * Evidence inventura (Inventury) Relations.
     *
     * @var array
     */
 static public $inventura = array (
  0 => 
  array (
    'url' => 'inventura-polozky',
    'evidenceType' => 'INVENTURA_POLOZKA',
    'name' => 'Položka inventury',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     *
     * @var array
     */
 static public $konstSymbol = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kontakt (Kontakty) Relations.
     *
     * @var array
     */
 static public $kontakt = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Relations.
     *
     * @var array
     */
 static public $intrastatKrajUrceni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kurz (Kurzy) Relations.
     *
     * @var array
     */
 static public $kurz = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Relations.
     *
     * @var array
     */
 static public $intrastatKurz = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Relations.
     *
     * @var array
     */
 static public $kurzProCenotvorbu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Relations.
     *
     * @var array
     */
 static public $intrastatKodNomenklatury = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence leasing (Leasing) Relations.
     *
     * @var array
     */
 static public $leasing = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence majetek (Majetek) Relations.
     *
     * @var array
     */
 static public $majetek = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'majetek-udalosti',
    'evidenceType' => 'MAJETEK_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Relations.
     *
     * @var array
     */
 static public $mapovaniSkladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Relations.
     *
     * @var array
     */
 static public $mzdovaSlozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence misto-urceni (Místa určení) Relations.
     *
     * @var array
     */
 static public $mistoUrceni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence mena (Měny) Relations.
     *
     * @var array
     */
 static public $mena = array (
  0 => 
  array (
    'url' => 'kurzy',
    'evidenceType' => 'KURZ',
    'name' => 'Kurzy',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Relations.
     *
     * @var array
     */
 static public $intrastatMernaJednotka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Relations.
     *
     * @var array
     */
 static public $mernaJednotka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence nepritomnost (Nepřítomnost) Relations.
     *
     * @var array
     */
 static public $nepritomnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Relations.
     *
     * @var array
     */
 static public $naklad = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Relations.
     *
     * @var array
     */
 static public $intrastatObchodniTransakce = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Relations.
     *
     * @var array
     */
 static public $smlouva = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ),
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Relations.
     *
     * @var array
     */
 static public $odpisovaSkupina = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence uzivatel (Osoby a uživatelé) Relations.
     *
     * @var array
     */
 static public $uzivatel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Relations.
     *
     * @var array
     */
 static public $pohledavka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POHLEDAVKA_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence zavazek (Ostatní závazky) Relations.
     *
     * @var array
     */
 static public $zavazek = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'ZAVAZEK_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotazParametr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Relations.
     *
     * @var array
     */
 static public $penezniUstav = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence osoba (Personalistika) Relations.
     *
     * @var array
     */
 static public $osoba = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     *
     * @var array
     */
 static public $podobneZbozi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Relations.
     *
     * @var array
     */
 static public $pokladniPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
    'name' => 'Položky pokladního dokladu',
  ),
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Relations.
     *
     * @var array
     */
 static public $parametr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Relations.
     *
     * @var array
     */
 static public $prikazKInkasuPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Relations.
     *
     * @var array
     */
 static public $prikazKUhradePolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Relations.
     *
     * @var array
     */
 static public $interniDokladPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence inventura-polozka (Položky inventur) Relations.
     *
     * @var array
     */
 static public $inventuraPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Relations.
     *
     * @var array
     */
 static public $pohledavkaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Relations.
     *
     * @var array
     */
 static public $zavazekPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Relations.
     *
     * @var array
     */
 static public $pokladniPohybPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Relations.
     *
     * @var array
     */
 static public $fakturaPrijataPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Relations.
     *
     * @var array
     */
 static public $poptavkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Relations.
     *
     * @var array
     */
 static public $skladovyPohybPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Relations.
     *
     * @var array
     */
 static public $smlouvaPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Relations.
     *
     * @var array
     */
 static public $fakturaVydanaPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Relations.
     *
     * @var array
     */
 static public $bankaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence poplatek (Poplatky) Relations.
     *
     * @var array
     */
 static public $poplatek = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence psc (Poštovní směrovací čísla) Relations.
     *
     * @var array
     */
 static public $psc = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Relations.
     *
     * @var array
     */
 static public $pracovniPomerHlavicka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Relations.
     *
     * @var array
     */
 static public $pracovniPomer = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prodejka (Prodejní kasa) Relations.
     *
     * @var array
     */
 static public $prodejka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence prace (Práce pro střediska) Relations.
     *
     * @var array
     */
 static public $prace = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prace-mesic (Práce pro střediska) Relations.
     *
     * @var array
     */
 static public $praceMesic = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence text (Předdefinované texty) Relations.
     *
     * @var array
     */
 static public $text = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Relations.
     *
     * @var array
     */
 static public $predpisZauctovani = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Relations.
     *
     * @var array
     */
 static public $fakturaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_IN_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_IN_POLOZKA',
    'name' => 'Položky nabídky přijaté',
  ),
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
    'name' => 'Položky objednávky přijaté',
  ),
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_IN_POLOZKA',
    'name' => 'Položky poptávky přijaté',
  ),
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Relations.
     *
     * @var array
     */
 static public $skladovyPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ),
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Relations.
     *
     * @var array
     */
 static public $prikazKInkasu = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_INKASU_POLOZKA',
    'name' => 'Položky',
  ),
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Relations.
     *
     * @var array
     */
 static public $prikazKUhrade = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'name' => 'Položky',
  ),
);
    /**
     * Evidence priloha (Příloha) Relations.
     *
     * @var array
     */
 static public $priloha = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prislustenstvi (Příslušenství) Relations.
     *
     * @var array
     */
 static public $prislustenstvi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rezervace (Rezervace) Relations.
     *
     * @var array
     */
 static public $rezervace = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Relations.
     *
     * @var array
     */
 static public $rocniRada = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sady-a-komplety (Sady) Relations.
     *
     * @var array
     */
 static public $sadyAKomplety = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sazba-dph (Sazby DPH) Relations.
     *
     * @var array
     */
 static public $sazbaDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Relations.
     *
     * @var array
     */
 static public $dashboardSharing = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Relations.
     *
     * @var array
     */
 static public $bankovniUcet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladna (Seznam pokladen) Relations.
     *
     * @var array
     */
 static public $pokladna = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Relations.
     *
     * @var array
     */
 static public $typProdejky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sklad (Seznam skladů) Relations.
     *
     * @var array
     */
 static public $sklad = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Relations.
     *
     * @var array
     */
 static public $preneseniDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skladova-karta (Skladové karty) Relations.
     *
     * @var array
     */
 static public $skladovaKarta = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'skladovy-pohyb-polozky',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ),
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Relations.
     *
     * @var array
     */
 static public $skupinaAtributu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-firem (Skupiny firem) Relations.
     *
     * @var array
     */
 static public $skupinaFirem = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-osob (Skupiny osob) Relations.
     *
     * @var array
     */
 static public $skupinaOsob = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Relations.
     *
     * @var array
     */
 static public $skupinaZbozi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Relations.
     *
     * @var array
     */
 static public $skupinaStitku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence smena (Směny) Relations.
     *
     * @var array
     */
 static public $smena = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Relations.
     *
     * @var array
     */
 static public $dashboardPanel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence srazka (Srážka) Relations.
     *
     * @var array
     */
 static public $srazka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Relations.
     *
     * @var array
     */
 static public $ucetniOsnova = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Relations.
     *
     * @var array
     */
 static public $stavSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Relations.
     *
     * @var array
     */
 static public $stavZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Relations.
     *
     * @var array
     */
 static public $stalaMzdovaSlozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stat (Státy) Relations.
     *
     * @var array
     */
 static public $stat = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stredisko (Střediska) Relations.
     *
     * @var array
     */
 static public $stredisko = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence subjekt (Subjekt) Relations.
     *
     * @var array
     */
 static public $subjekt = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Relations.
     *
     * @var array
     */
 static public $typPracovnihoPomeru = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-atributu (Typy atributů) Relations.
     *
     * @var array
     */
 static public $typAtributu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Relations.
     *
     * @var array
     */
 static public $typBanka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Relations.
     *
     * @var array
     */
 static public $dodavatelskyTypSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Relations.
     *
     * @var array
     */
 static public $typInternihoDokladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Relations.
     *
     * @var array
     */
 static public $typLeasingu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-majetku (Typy majetků) Relations.
     *
     * @var array
     */
 static public $typMajetku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Relations.
     *
     * @var array
     */
 static public $typNakladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Relations.
     *
     * @var array
     */
 static public $typSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Relations.
     *
     * @var array
     */
 static public $typPohledavky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Relations.
     *
     * @var array
     */
 static public $typZavazku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Relations.
     *
     * @var array
     */
 static public $typPokladniPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Relations.
     *
     * @var array
     */
 static public $typFakturyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Relations.
     *
     * @var array
     */
 static public $typNabidkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Relations.
     *
     * @var array
     */
 static public $typObjednavkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Relations.
     *
     * @var array
     */
 static public $typPoptavkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Relations.
     *
     * @var array
     */
 static public $typSkladovyPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Relations.
     *
     * @var array
     */
 static public $typAktivity = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Relations.
     *
     * @var array
     */
 static public $typUzivatelskeVazby = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Relations.
     *
     * @var array
     */
 static public $typFakturyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Relations.
     *
     * @var array
     */
 static public $typNabidkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Relations.
     *
     * @var array
     */
 static public $typObjednavkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Relations.
     *
     * @var array
     */
 static public $typPoptavkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Relations.
     *
     * @var array
     */
 static public $typZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Relations.
     *
     * @var array
     */
 static public $typVzajemnychZapoctu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence majetek-udalost (Události) Relations.
     *
     * @var array
     */
 static public $majetekUdalost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence udalost (Události, aktivity) Relations.
     *
     * @var array
     */
 static public $udalost = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'naklady',
    'evidenceType' => 'NAKLAD',
    'name' => 'Náklady aktivity',
  ),
  2 => 
  array (
    'url' => 'kontakty',
    'evidenceType' => 'ADR_KONTAKT',
    'name' => 'Kontakty',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence umisteni (Umístění) Relations.
     *
     * @var array
     */
 static public $umisteni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuRegal = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuMistnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladuPolice = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Relations.
     *
     * @var array
     */
 static public $umisteniVeSkladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sablona-upominky (Upomínky) Relations.
     *
     * @var array
     */
 static public $sablonaUpominky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence strom (Uzel stromu) Relations.
     *
     * @var array
     */
 static public $strom = array (
  0 => 'prilohy',
  1 => 'PRILOHA',
  2 => 'Přílohy',
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotaz = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'params',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
    'name' => 'Parametry',
  ),
  2 => 
  array (
    'url' => 'props',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
    'name' => 'Vlastnosti',
  ),
);
    /**
     * Evidence filtr (Uživatelské filtry) Relations.
     *
     * @var array
     */
 static public $filtr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Relations.
     *
     * @var array
     */
 static public $customButton = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence xslt (Uživatelské transformace) Relations.
     *
     * @var array
     */
 static public $xslt = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Relations.
     *
     * @var array
     */
 static public $uzivatelskyDotazVlastnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Relations.
     *
     * @var array
     */
 static public $fakturaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Relations.
     *
     * @var array
     */
 static public $nabidkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_OUT_POLOZKA',
    'name' => 'Položky nabídky vydané',
  ),
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Relations.
     *
     * @var array
     */
 static public $objednavkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
    'name' => 'Položky objednávky vydané',
  ),
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Relations.
     *
     * @var array
     */
 static public $poptavkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
    'name' => 'Položky poptávky vydané',
  ),
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Relations.
     *
     * @var array
     */
 static public $hodnoceniZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Relations.
     *
     * @var array
     */
 static public $vzajemnyZapocet = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ),
);
    /**
     * Evidence zakazka (Zakázky) Relations.
     *
     * @var array
     */
 static public $zakazka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Relations.
     *
     * @var array
     */
 static public $formaUhradyZauctovani = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Relations.
     *
     * @var array
     */
 static public $intrastatZvlastniPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence zapujcka (Zápůjčky) Relations.
     *
     * @var array
     */
 static public $zapujcka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rada (dokladové řady) Relations.
     *
     * @var array
     */
 static public $rada = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     *
     * @var array
     */
 static public $ucet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cinnost (Činnost) Relations.
     *
     * @var array
     */
 static public $cinnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Relations.
     *
     * @var array
     */
 static public $ciselnikMzdovychSlozek = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 static public $stavCeniku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 static public $typStavuCeniku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Relations.
     *
     * @var array
     */
 static public $cisloBaliku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Relations.
     *
     * @var array
     */
 static public $cleneniKontrolniHlaseni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Relations.
     *
     * @var array
     */
 static public $cleneniDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stitek (Štítky) Relations.
     *
     * @var array
     */
 static public $stitek = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
}
