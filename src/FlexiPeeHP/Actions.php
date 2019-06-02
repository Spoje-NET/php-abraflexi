<?php
/**
 * FlexiPeeHP - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-2019 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * EvidenceActions
 *
 * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */

class Actions
{
    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 static public $version = '2019.2.0.2';

    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array
     */
 static public $adresar = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mzda (Aktualizace mezd) Actions.
     *
     * @var array
     */
 static public $mzda = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence analyza-nakupu (Analýza nákupu) Actions.
     *
     * @var array
     */
 static public $analyzaNakupu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence analyza-prodeje (Analýza prodeje) Actions.
     *
     * @var array
     */
 static public $analyzaProdeje = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence atribut (Atributy) Actions.
     *
     * @var array
     */
 static public $atribut = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence banka (Banka) Actions.
     *
     * @var array
     */
 static public $banka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
  'automaticke-parovani' => 
  array (
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Actions.
     *
     * @var array
     */
 static public $formatElektronickehoBankovnictvi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Actions.
     *
     * @var array
     */
 static public $mzdyBankovniSpojeni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Actions.
     *
     * @var array
     */
 static public $adresarBankovniUcet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Actions.
     *
     * @var array
     */
 static public $cenovaUroven = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Actions.
     *
     * @var array
     */
 static public $odberatel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenik (Ceník) Actions.
     *
     * @var array
     */
 static public $cenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Actions.
     *
     * @var array
     */
 static public $cenikovaSkupina = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Actions.
     *
     * @var array
     */
 static public $certifikacniAutorita = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Actions.
     *
     * @var array
     */
 static public $intrastatDodaciPodminky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Actions.
     *
     * @var array
     */
 static public $dodavatelskaSmlouva = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'generovani-faktur' => 
  array (
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatel (Dodavatelé) Actions.
     *
     * @var array
     */
 static public $dodavatel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Actions.
     *
     * @var array
     */
 static public $radaBanka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Actions.
     *
     * @var array
     */
 static public $radaInternihoDokladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Actions.
     *
     * @var array
     */
 static public $radaPohledavky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Actions.
     *
     * @var array
     */
 static public $radaPokladniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Actions.
     *
     * @var array
     */
 static public $radaFakturyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $radaNabidkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $radaObjednavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Actions.
     *
     * @var array
     */
 static public $radaPoptavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Actions.
     *
     * @var array
     */
 static public $radaSkladovyPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Actions.
     *
     * @var array
     */
 static public $radaFakturyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Actions.
     *
     * @var array
     */
 static public $radaNabidkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Actions.
     *
     * @var array
     */
 static public $radaObjednavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Actions.
     *
     * @var array
     */
 static public $radaPoptavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Actions.
     *
     * @var array
     */
 static public $radaZavazku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Actions.
     *
     * @var array
     */
 static public $intrastatDruhDopravy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dite (Dítě) Actions.
     *
     * @var array
     */
 static public $dite = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence eet-komunikace (EET komunikace) Actions.
     *
     * @var array
     */
 static public $eetKomunikace = array (
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Actions.
     *
     * @var array
     */
 static public $cenikObal = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Actions.
     *
     * @var array
     */
 static public $formaDopravy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Actions.
     *
     * @var array
     */
 static public $formaUhrady = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence osoba-hlavicka (Hlavičky osob) Actions.
     *
     * @var array
     */
 static public $osobaHlavicka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Actions.
     *
     * @var array
     */
 static public $hlavniKniha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence individualni-cenik (Individuální ceník) Actions.
     *
     * @var array
     */
 static public $individualniCenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence insight (Insight) Actions.
     *
     * @var array
     */
 static public $insight = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence interni-doklad (Interní doklady) Actions.
     *
     * @var array
     */
 static public $interniDoklad = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence inventura (Inventury) Actions.
     *
     * @var array
     */
 static public $inventura = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Actions.
     *
     * @var array
     */
 static public $konstSymbol = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kontakt (Kontakty) Actions.
     *
     * @var array
     */
 static public $kontakt = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Actions.
     *
     * @var array
     */
 static public $intrastatKrajUrceni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kurz (Kurzy) Actions.
     *
     * @var array
     */
 static public $kurz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Actions.
     *
     * @var array
     */
 static public $intrastatKurz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Actions.
     *
     * @var array
     */
 static public $kurzProCenotvorbu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Actions.
     *
     * @var array
     */
 static public $intrastatKodNomenklatury = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence leasing (Leasing) Actions.
     *
     * @var array
     */
 static public $leasing = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence majetek (Majetek) Actions.
     *
     * @var array
     */
 static public $majetek = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Actions.
     *
     * @var array
     */
 static public $mapovaniSkladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Actions.
     *
     * @var array
     */
 static public $mzdovaSlozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence misto-urceni (Místa určení) Actions.
     *
     * @var array
     */
 static public $mistoUrceni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mena (Měny) Actions.
     *
     * @var array
     */
 static public $mena = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Actions.
     *
     * @var array
     */
 static public $intrastatMernaJednotka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Actions.
     *
     * @var array
     */
 static public $mernaJednotka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nastaveni (Nastavení) Actions.
     *
     * @var array
     */
 static public $nastaveni = array (
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nepritomnost (Nepřítomnost) Actions.
     *
     * @var array
     */
 static public $nepritomnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Actions.
     *
     * @var array
     */
 static public $naklad = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 static public $cenikovyPohybNakup = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 static public $cenikovyPohybProdej = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Actions.
     *
     * @var array
     */
 static public $intrastatObchodniTransakce = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom-koren (Obecný strom) Actions.
     *
     * @var array
     */
 static public $stromKoren = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Actions.
     *
     * @var array
     */
 static public $obratovaPredvaha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence obrat (Obraty) Actions.
     *
     * @var array
     */
 static public $obrat = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Actions.
     *
     * @var array
     */
 static public $smlouva = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'generovani-faktur' => 
  array (
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Actions.
     *
     * @var array
     */
 static public $odpisovaSkupina = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Actions.
     *
     * @var array
     */
 static public $pohledavka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence zavazek (Ostatní závazky) Actions.
     *
     * @var array
     */
 static public $zavazek = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotazParametr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Actions.
     *
     * @var array
     */
 static public $penezniUstav = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence osoba (Personalistika) Actions.
     *
     * @var array
     */
 static public $osoba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence podklady-dph (Podklady DPH) Actions.
     *
     * @var array
     */
 static public $podkladyDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence podobne-zbozi (Podobné) Actions.
     *
     * @var array
     */
 static public $podobneZbozi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Actions.
     *
     * @var array
     */
 static public $pohybNaUctech = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Actions.
     *
     * @var array
     */
 static public $pokladniPohyb = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
  'automaticke-parovani' => 
  array (
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Actions.
     *
     * @var array
     */
 static public $parametr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Actions.
     *
     * @var array
     */
 static public $prikazKInkasuPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Actions.
     *
     * @var array
     */
 static public $prikazKUhradePolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Actions.
     *
     * @var array
     */
 static public $interniDokladPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence inventura-polozka (Položky inventur) Actions.
     *
     * @var array
     */
 static public $inventuraPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Actions.
     *
     * @var array
     */
 static public $pohledavkaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Actions.
     *
     * @var array
     */
 static public $zavazekPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Actions.
     *
     * @var array
     */
 static public $pokladniPohybPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Actions.
     *
     * @var array
     */
 static public $fakturaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Actions.
     *
     * @var array
     */
 static public $poptavkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Actions.
     *
     * @var array
     */
 static public $skladovyPohybPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Actions.
     *
     * @var array
     */
 static public $smlouvaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Actions.
     *
     * @var array
     */
 static public $fakturaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Actions.
     *
     * @var array
     */
 static public $bankaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poplatek (Poplatky) Actions.
     *
     * @var array
     */
 static public $poplatek = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Actions.
     *
     * @var array
     */
 static public $pracovniPomerHlavicka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Actions.
     *
     * @var array
     */
 static public $pracovniPomer = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prodejka (Prodejní kasa) Actions.
     *
     * @var array
     */
 static public $prodejka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-preplatky' => 
  array (
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence prace (Práce pro střediska) Actions.
     *
     * @var array
     */
 static public $prace = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prace-mesic (Práce pro střediska) Actions.
     *
     * @var array
     */
 static public $praceMesic = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Actions.
     *
     * @var array
     */
 static public $pravoViditelnosti = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence text (Předdefinované texty) Actions.
     *
     * @var array
     */
 static public $text = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Actions.
     *
     * @var array
     */
 static public $predpisZauctovani = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prehled-zamestnancu (Přehled zaměstnanců) Actions.
     *
     * @var array
     */
 static public $prehledZamestnancu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Actions.
     *
     * @var array
     */
 static public $fakturaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Actions.
     *
     * @var array
     */
 static public $skladovyPohyb = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'dokoncit-prevodku' => 
  array (
    'actionId' => 'dokoncit-prevodku',
    'actionName' => 'Dokončit převodku',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Actions.
     *
     * @var array
     */
 static public $prikazKInkasu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Actions.
     *
     * @var array
     */
 static public $prikazKUhrade = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence priloha (Příloha) Actions.
     *
     * @var array
     */
 static public $priloha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prislustenstvi (Příslušenství) Actions.
     *
     * @var array
     */
 static public $prislustenstvi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rezervace (Rezervace) Actions.
     *
     * @var array
     */
 static public $rezervace = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Actions.
     *
     * @var array
     */
 static public $rocniRada = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sady-a-komplety (Sady) Actions.
     *
     * @var array
     */
 static public $sadyAKomplety = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence saldo (Saldo) Actions.
     *
     * @var array
     */
 static public $saldo = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sazba-dph (Sazby DPH) Actions.
     *
     * @var array
     */
 static public $sazbaDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Actions.
     *
     * @var array
     */
 static public $dashboardSharing = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Actions.
     *
     * @var array
     */
 static public $bankovniUcet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladna (Seznam pokladen) Actions.
     *
     * @var array
     */
 static public $pokladna = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Actions.
     *
     * @var array
     */
 static public $typProdejky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sklad (Seznam skladů) Actions.
     *
     * @var array
     */
 static public $sklad = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Actions.
     *
     * @var array
     */
 static public $preneseniDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skladova-karta (Skladové karty) Actions.
     *
     * @var array
     */
 static public $skladovaKarta = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Actions.
     *
     * @var array
     */
 static public $skupinaAtributu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-firem (Skupiny firem) Actions.
     *
     * @var array
     */
 static public $skupinaFirem = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-osob (Skupiny osob) Actions.
     *
     * @var array
     */
 static public $skupinaOsob = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Actions.
     *
     * @var array
     */
 static public $skupinaZbozi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Actions.
     *
     * @var array
     */
 static public $skupinaStitku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence smena (Směny) Actions.
     *
     * @var array
     */
 static public $smena = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Actions.
     *
     * @var array
     */
 static public $rozvahaPoUctech = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Actions.
     *
     * @var array
     */
 static public $dashboardPanel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence srazka (Srážka) Actions.
     *
     * @var array
     */
 static public $srazka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Actions.
     *
     * @var array
     */
 static public $stavSkladuKDatu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Actions.
     *
     * @var array
     */
 static public $saldoKDatu = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Actions.
     *
     * @var array
     */
 static public $stavSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Actions.
     *
     * @var array
     */
 static public $stavZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-uctu (Stavy účtů) Actions.
     *
     * @var array
     */
 static public $stavUctu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Actions.
     *
     * @var array
     */
 static public $stalaMzdovaSlozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stat (Státy) Actions.
     *
     * @var array
     */
 static public $stat = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stredisko (Střediska) Actions.
     *
     * @var array
     */
 static public $stredisko = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence subjekt (Subjekt) Actions.
     *
     * @var array
     */
 static public $subjekt = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-organizace (Typ organizace) Actions.
     *
     * @var array
     */
 static public $typOrganizace = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Actions.
     *
     * @var array
     */
 static public $typPracovnihoPomeru = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-atributu (Typy atributů) Actions.
     *
     * @var array
     */
 static public $typAtributu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Actions.
     *
     * @var array
     */
 static public $typBanka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Actions.
     *
     * @var array
     */
 static public $dodavatelskyTypSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Actions.
     *
     * @var array
     */
 static public $typInternihoDokladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Actions.
     *
     * @var array
     */
 static public $typLeasingu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-majetku (Typy majetků) Actions.
     *
     * @var array
     */
 static public $typMajetku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Actions.
     *
     * @var array
     */
 static public $typNakladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Actions.
     *
     * @var array
     */
 static public $typSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Actions.
     *
     * @var array
     */
 static public $typPohledavky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Actions.
     *
     * @var array
     */
 static public $typZavazku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Actions.
     *
     * @var array
     */
 static public $typPokladniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Actions.
     *
     * @var array
     */
 static public $typFakturyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Actions.
     *
     * @var array
     */
 static public $typNabidkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Actions.
     *
     * @var array
     */
 static public $typObjednavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Actions.
     *
     * @var array
     */
 static public $typPoptavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Actions.
     *
     * @var array
     */
 static public $typSkladovyPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Actions.
     *
     * @var array
     */
 static public $typAktivity = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Actions.
     *
     * @var array
     */
 static public $typUzivatelskeVazby = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Actions.
     *
     * @var array
     */
 static public $typFakturyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Actions.
     *
     * @var array
     */
 static public $typNabidkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Actions.
     *
     * @var array
     */
 static public $typObjednavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Actions.
     *
     * @var array
     */
 static public $typPoptavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Actions.
     *
     * @var array
     */
 static public $typZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Actions.
     *
     * @var array
     */
 static public $typVzajemnychZapoctu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence majetek-udalost (Události) Actions.
     *
     * @var array
     */
 static public $majetekUdalost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence udalost (Události, aktivity) Actions.
     *
     * @var array
     */
 static public $udalost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni (Umístění) Actions.
     *
     * @var array
     */
 static public $umisteni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuRegal = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuMistnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuPolice = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sablona-upominky (Upomínky) Actions.
     *
     * @var array
     */
 static public $sablonaUpominky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom (Uzel stromu) Actions.
     *
     * @var array
     */
 static public $strom = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotaz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence filtr (Uživatelské filtry) Actions.
     *
     * @var array
     */
 static public $filtr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Actions.
     *
     * @var array
     */
 static public $customButton = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence xslt (Uživatelské transformace) Actions.
     *
     * @var array
     */
 static public $xslt = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Actions.
     *
     * @var array
     */
 static public $uzivatelskaVazba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Actions.
     *
     * @var array
     */
 static public $stromCenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vazba (Vazby dokladu) Actions.
     *
     * @var array
     */
 static public $vazba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotazVlastnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Actions.
     *
     * @var array
     */
 static public $fakturaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-preplatky' => 
  array (
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Actions.
     *
     * @var array
     */
 static public $hodnoceniZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Actions.
     *
     * @var array
     */
 static public $vzajemnyZapocet = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence danova-evidence (Výkaz daňové evidence) Actions.
     *
     * @var array
     */
 static public $danovaEvidence = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Actions.
     *
     * @var array
     */
 static public $vykazHospodareni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Actions.
     *
     * @var array
     */
 static public $vyrobniCislo = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zakazka (Zakázky) Actions.
     *
     * @var array
     */
 static public $zakazka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Actions.
     *
     * @var array
     */
 static public $formaUhradyZauctovani = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Actions.
     *
     * @var array
     */
 static public $intrastatZvlastniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zapujcka (Zápůjčky) Actions.
     *
     * @var array
     */
 static public $zapujcka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada (dokladové řady) Actions.
     *
     * @var array
     */
 static public $rada = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prodejka-platba (Úhrada) Actions.
     *
     * @var array
     */
 static public $prodejkaPlatba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence setting-store (Úložiště nastavení) Actions.
     *
     * @var array
     */
 static public $settingStore = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Actions.
     *
     * @var array
     */
 static public $analyzaZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucetni-denik (Účetní deník) Actions.
     *
     * @var array
     */
 static public $ucetniDenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucetni-obdobi (Účetní období) Actions.
     *
     * @var array
     */
 static public $ucetniObdobi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucet (Účtový rozvrh) Actions.
     *
     * @var array
     */
 static public $ucet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cinnost (Činnost) Actions.
     *
     * @var array
     */
 static public $cinnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Actions.
     *
     * @var array
     */
 static public $ciselnikMzdovychSlozek = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 static public $stavCeniku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 static public $typStavuCeniku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Actions.
     *
     * @var array
     */
 static public $cisloBaliku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Actions.
     *
     * @var array
     */
 static public $cleneniKontrolniHlaseni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stitek (Štítky) Actions.
     *
     * @var array
     */
 static public $stitek = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zurnal (Žurnál) Actions.
     *
     * @var array
     */
 static public $zurnal = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
}
