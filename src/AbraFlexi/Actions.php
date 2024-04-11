<?php
    
/**
 * AbraFlexi - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
 */

namespace AbraFlexi;

/**
 * EvidenceActions
 *
 * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */

class Actions
{
    /**
     * Source AbraFlexi server version.
     *
     * @var string
     */
 static public $version = '2024.2.10';

    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array
     */
 static public $adresar = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence atribut (Atributy) Actions.
     *
     * @var array
     */
 static public $atribut = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence autotisk (Automatický tisk) Actions.
     *
     * @var array
     */
 static public $autotisk = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence banka (Banka) Actions.
     *
     * @var array
     */
 static public $banka = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
  'automaticke-parovani' => [
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Actions.
     *
     * @var array
     */
 static public $formatElektronickehoBankovnictvi = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Actions.
     *
     * @var array
     */
 static public $adresarBankovniUcet = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence bankovni-ucet-pokladna (Bankovní účty a pokladny) Actions.
     *
     * @var array
     */
 static public $bankovniUcetPokladna = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence bankovni-ucet-sklad-pokladna (Banky/pokladny/sklady) Actions.
     *
     * @var array
     */
 static public $bankovniUcetSkladPokladna = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenova-uroven (Cenové úrovně) Actions.
     *
     * @var array
     */
 static public $cenovaUroven = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Actions.
     *
     * @var array
     */
 static public $odberatel = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenik (Ceník) Actions.
     *
     * @var array
     */
 static public $cenik = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Actions.
     *
     * @var array
     */
 static public $cenikovaSkupina = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Actions.
     *
     * @var array
     */
 static public $certifikacniAutorita = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence certifikat (Certifikáty) Actions.
     *
     * @var array
     */
 static public $certifikat = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence danovy-naklad (Daňové náklady) Actions.
     *
     * @var array
     */
 static public $danovyNaklad = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence danovy-odpis (Daňové odpisy) Actions.
     *
     * @var array
     */
 static public $danovyOdpis = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Actions.
     *
     * @var array
     */
 static public $intrastatDodaciPodminky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Actions.
     *
     * @var array
     */
 static public $dodavatelskaSmlouva = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'generovani-faktur' => [
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence dodavatel (Dodavatelé) Actions.
     *
     * @var array
     */
 static public $dodavatel = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Actions.
     *
     * @var array
     */
 static public $radaBanka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Actions.
     *
     * @var array
     */
 static public $radaInternihoDokladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Actions.
     *
     * @var array
     */
 static public $radaPohledavky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Actions.
     *
     * @var array
     */
 static public $radaPokladniPohyb = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Actions.
     *
     * @var array
     */
 static public $radaFakturyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $radaNabidkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $radaObjednavkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Actions.
     *
     * @var array
     */
 static public $radaPoptavkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Actions.
     *
     * @var array
     */
 static public $radaSkladovyPohyb = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Actions.
     *
     * @var array
     */
 static public $radaFakturyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Actions.
     *
     * @var array
     */
 static public $radaNabidkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Actions.
     *
     * @var array
     */
 static public $radaObjednavkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Actions.
     *
     * @var array
     */
 static public $radaPoptavkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Actions.
     *
     * @var array
     */
 static public $radaZavazku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence doklad-k-uhrade (Doklady k úhradě) Actions.
     *
     * @var array
     */
 static public $dokladKUhrade = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Actions.
     *
     * @var array
     */
 static public $intrastatDruhDopravy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenik-obal (Evidence obalů EkoKom) Actions.
     *
     * @var array
     */
 static public $cenikObal = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence forma-dopravy (Formy dopravy) Actions.
     *
     * @var array
     */
 static public $formaDopravy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence forma-uhrady (Formy úhrady) Actions.
     *
     * @var array
     */
 static public $formaUhrady = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Actions.
     *
     * @var array
     */
 static public $hlavniKniha = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence individualni-cenik (Individuální ceník) Actions.
     *
     * @var array
     */
 static public $individualniCenik = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence insight (Insight) Actions.
     *
     * @var array
     */
 static public $insight = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence interni-doklad (Interní doklady) Actions.
     *
     * @var array
     */
 static public $interniDoklad = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence inventura (Inventury) Actions.
     *
     * @var array
     */
 static public $inventura = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence certifikat-finbricks (Klíče Finbricks) Actions.
     *
     * @var array
     */
 static public $certifikatFinbricks = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence konst-symbol (Konstantní symboly) Actions.
     *
     * @var array
     */
 static public $konstSymbol = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence kontakt (Kontakty) Actions.
     *
     * @var array
     */
 static public $kontakt = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Actions.
     *
     * @var array
     */
 static public $intrastatKrajUrceni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence kurz (Kurzy) Actions.
     *
     * @var array
     */
 static public $kurz = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Actions.
     *
     * @var array
     */
 static public $intrastatKurz = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Actions.
     *
     * @var array
     */
 static public $kurzProCenotvorbu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence kurz-pro-preceneni (Kurzy pro přecenění) Actions.
     *
     * @var array
     */
 static public $kurzProPreceneni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence kusovnik (Kusovník) Actions.
     *
     * @var array
     */
 static public $kusovnik = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'prepocti-nakupni-cenu' => [
    'actionId' => 'prepocti-nakupni-cenu',
    'actionName' => '#kusovnikPrepoctiNakupniCenu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'prepocti-prodejni-cenu' => [
    'actionId' => 'prepocti-prodejni-cenu',
    'actionName' => '#kusovnikPrepoctiProdejniCenu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
];
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Actions.
     *
     * @var array
     */
 static public $intrastatKodNomenklatury = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence leasing (Leasing) Actions.
     *
     * @var array
     */
 static public $leasing = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence majetek (Majetek) Actions.
     *
     * @var array
     */
 static public $majetek = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence mapovani-skladu (Mapování skladů) Actions.
     *
     * @var array
     */
 static public $mapovaniSkladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence misto-urceni (Místa určení) Actions.
     *
     * @var array
     */
 static public $mistoUrceni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence mena (Měny) Actions.
     *
     * @var array
     */
 static public $mena = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Actions.
     *
     * @var array
     */
 static public $intrastatMernaJednotka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Actions.
     *
     * @var array
     */
 static public $mernaJednotka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence vazebni-doklad (Navázané doklady) Actions.
     *
     * @var array
     */
 static public $vazebniDoklad = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence po-splatnosti (Neuhrazené pohledávky/závazky po splatnosti) Actions.
     *
     * @var array
     */
 static public $poSplatnosti = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence naklad (Náklady na události / aktivity) Actions.
     *
     * @var array
     */
 static public $naklad = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 static public $cenikovyPohybNakup = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 static public $cenikovyPohybProdej = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Actions.
     *
     * @var array
     */
 static public $intrastatObchodniTransakce = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence strom-koren (Obecný strom) Actions.
     *
     * @var array
     */
 static public $stromKoren = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Actions.
     *
     * @var array
     */
 static public $obratovaPredvaha = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence obrat (Obraty) Actions.
     *
     * @var array
     */
 static public $obrat = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence smlouva (Odběratelské smlouvy) Actions.
     *
     * @var array
     */
 static public $smlouva = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'generovani-faktur' => [
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Actions.
     *
     * @var array
     */
 static public $odpisovaSkupina = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pohledavka (Ostatní pohledávky) Actions.
     *
     * @var array
     */
 static public $pohledavka = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence zavazek (Ostatní závazky) Actions.
     *
     * @var array
     */
 static public $zavazek = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'sign-for-payment' => [
    'actionId' => 'sign-for-payment',
    'actionName' => 'Podepsat k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unsign-for-payment' => [
    'actionId' => 'unsign-for-payment',
    'actionName' => 'Zrušit podpis k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotazParametr = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Actions.
     *
     * @var array
     */
 static public $penezniUstav = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence podklady-dph (Podklady DPH) Actions.
     *
     * @var array
     */
 static public $podkladyDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence podobne-zbozi (Podobné) Actions.
     *
     * @var array
     */
 static public $podobneZbozi = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Actions.
     *
     * @var array
     */
 static public $pohybNaUctech = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pokladni-pohyb (Pokladna) Actions.
     *
     * @var array
     */
 static public $pokladniPohyb = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
  'automaticke-parovani' => [
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Actions.
     *
     * @var array
     */
 static public $parametr = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Actions.
     *
     * @var array
     */
 static public $prikazKInkasuPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Actions.
     *
     * @var array
     */
 static public $prikazKUhradePolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Actions.
     *
     * @var array
     */
 static public $interniDokladPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence inventura-polozka (Položky inventur) Actions.
     *
     * @var array
     */
 static public $inventuraPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Actions.
     *
     * @var array
     */
 static public $pohledavkaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Actions.
     *
     * @var array
     */
 static public $zavazekPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Actions.
     *
     * @var array
     */
 static public $pokladniPohybPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaPrijataPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaPrijataPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Actions.
     *
     * @var array
     */
 static public $fakturaPrijataPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Actions.
     *
     * @var array
     */
 static public $poptavkaPrijataPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Actions.
     *
     * @var array
     */
 static public $skladovyPohybPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence smlouva-polozka (Položky smluv) Actions.
     *
     * @var array
     */
 static public $smlouvaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaVydanaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaVydanaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaVydanaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Actions.
     *
     * @var array
     */
 static public $fakturaVydanaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence banka-polozka (Položky vzájemných zápočtů) Actions.
     *
     * @var array
     */
 static public $bankaPolozka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence poplatek (Poplatky) Actions.
     *
     * @var array
     */
 static public $poplatek = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prodejka (Prodejní kasa) Actions.
     *
     * @var array
     */
 static public $prodejka = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'sign-for-payment' => [
    'actionId' => 'sign-for-payment',
    'actionName' => 'Podepsat k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unsign-for-payment' => [
    'actionId' => 'unsign-for-payment',
    'actionName' => 'Zrušit podpis k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-preplatky' => [
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Actions.
     *
     * @var array
     */
 static public $pravoViditelnosti = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence text (Předdefinované texty) Actions.
     *
     * @var array
     */
 static public $text = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Actions.
     *
     * @var array
     */
 static public $predpisZauctovani = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence doklad (Přehled všech dokladů) Actions.
     *
     * @var array
     */
 static public $doklad = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence faktura-prijata (Přijaté faktury) Actions.
     *
     * @var array
     */
 static public $fakturaPrijata = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'sign-for-payment' => [
    'actionId' => 'sign-for-payment',
    'actionName' => 'Podepsat k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unsign-for-payment' => [
    'actionId' => 'unsign-for-payment',
    'actionName' => 'Zrušit podpis k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaPrijata = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaPrijata = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaPrijata = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Actions.
     *
     * @var array
     */
 static public $skladovyPohyb = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'dokoncit-prevodku' => [
    'actionId' => 'dokoncit-prevodku',
    'actionName' => 'Dokončit převodku',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Actions.
     *
     * @var array
     */
 static public $prikazKInkasu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Actions.
     *
     * @var array
     */
 static public $prikazKUhrade = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence priloha (Příloha) Actions.
     *
     * @var array
     */
 static public $priloha = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prislustenstvi (Příslušenství) Actions.
     *
     * @var array
     */
 static public $prislustenstvi = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rezervace (Rezervace) Actions.
     *
     * @var array
     */
 static public $rezervace = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Actions.
     *
     * @var array
     */
 static public $rocniRada = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sady-a-komplety (Sady) Actions.
     *
     * @var array
     */
 static public $sadyAKomplety = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence saldo (Saldo) Actions.
     *
     * @var array
     */
 static public $saldo = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sazba-dph (Sazby DPH) Actions.
     *
     * @var array
     */
 static public $sazbaDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Actions.
     *
     * @var array
     */
 static public $dashboardSharing = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Actions.
     *
     * @var array
     */
 static public $bankovniUcet = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pokladna (Seznam pokladen) Actions.
     *
     * @var array
     */
 static public $pokladna = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Actions.
     *
     * @var array
     */
 static public $typProdejky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sestava (Seznam sestav) Actions.
     *
     * @var array
     */
 static public $sestava = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sklad (Seznam skladů) Actions.
     *
     * @var array
     */
 static public $sklad = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Actions.
     *
     * @var array
     */
 static public $preneseniDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skladova-karta (Skladové karty) Actions.
     *
     * @var array
     */
 static public $skladovaKarta = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skupina-atributu (Skupiny atributů) Actions.
     *
     * @var array
     */
 static public $skupinaAtributu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skupina-firem (Skupiny firem) Actions.
     *
     * @var array
     */
 static public $skupinaFirem = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Actions.
     *
     * @var array
     */
 static public $skupinaZbozi = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence skupina-stitku (Skupiny štítků) Actions.
     *
     * @var array
     */
 static public $skupinaStitku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence souhrnne-hlaseni-dph (Souhrnné hlášení k DPH) Actions.
     *
     * @var array
     */
 static public $souhrnneHlaseniDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Actions.
     *
     * @var array
     */
 static public $rozvahaPoUctech = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence vysledovka-po-uctech (Soupis nákladů a výnosů) Actions.
     *
     * @var array
     */
 static public $vysledovkaPoUctech = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence splatkovy-kalendar (Splátkový kalendář) Actions.
     *
     * @var array
     */
 static public $splatkovyKalendar = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence standardni-predpis (Standardní předpis sestavy) Actions.
     *
     * @var array
     */
 static public $standardniPredpis = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-obchodniho-dokladu (Stav obchodního dokladu) Actions.
     *
     * @var array
     */
 static public $stavObchodnihoDokladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Actions.
     *
     * @var array
     */
 static public $stavSkladuKDatu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Actions.
     *
     * @var array
     */
 static public $saldoKDatu = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-smlouvy (Stavy smluv) Actions.
     *
     * @var array
     */
 static public $stavSmlouvy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-zakazky (Stavy zakázek) Actions.
     *
     * @var array
     */
 static public $stavZakazky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-uctu (Stavy účtů) Actions.
     *
     * @var array
     */
 static public $stavUctu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stat (Státy) Actions.
     *
     * @var array
     */
 static public $stat = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stredisko (Střediska) Actions.
     *
     * @var array
     */
 static public $stredisko = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence subjekt (Subjekt) Actions.
     *
     * @var array
     */
 static public $subjekt = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sumace-sestavy (Sumace v sestavách) Actions.
     *
     * @var array
     */
 static public $sumaceSestavy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-organizace (Typ organizace) Actions.
     *
     * @var array
     */
 static public $typOrganizace = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cenik-typ-sazby-dph (Typ sazby DPH) Actions.
     *
     * @var array
     */
 static public $cenikTypSazbyDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-atributu (Typy atributů) Actions.
     *
     * @var array
     */
 static public $typAtributu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Actions.
     *
     * @var array
     */
 static public $typBanka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Actions.
     *
     * @var array
     */
 static public $dodavatelskyTypSmlouvy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-dokladu (Typy dokladů) Actions.
     *
     * @var array
     */
 static public $typDokladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Actions.
     *
     * @var array
     */
 static public $typInternihoDokladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-leasingu (Typy leasingů) Actions.
     *
     * @var array
     */
 static public $typLeasingu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-majetku (Typy majetků) Actions.
     *
     * @var array
     */
 static public $typMajetku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Actions.
     *
     * @var array
     */
 static public $typNakladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Actions.
     *
     * @var array
     */
 static public $typSmlouvy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Actions.
     *
     * @var array
     */
 static public $typPohledavky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Actions.
     *
     * @var array
     */
 static public $typZavazku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Actions.
     *
     * @var array
     */
 static public $typPokladniPohyb = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Actions.
     *
     * @var array
     */
 static public $typFakturyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Actions.
     *
     * @var array
     */
 static public $typNabidkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Actions.
     *
     * @var array
     */
 static public $typObjednavkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Actions.
     *
     * @var array
     */
 static public $typPoptavkyPrijate = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Actions.
     *
     * @var array
     */
 static public $typSkladovyPohyb = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Actions.
     *
     * @var array
     */
 static public $typAktivity = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Actions.
     *
     * @var array
     */
 static public $typUzivatelskeVazby = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Actions.
     *
     * @var array
     */
 static public $typFakturyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Actions.
     *
     * @var array
     */
 static public $typNabidkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Actions.
     *
     * @var array
     */
 static public $typObjednavkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Actions.
     *
     * @var array
     */
 static public $typPoptavkyVydane = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-zakazky (Typy zakázek) Actions.
     *
     * @var array
     */
 static public $typZakazky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Actions.
     *
     * @var array
     */
 static public $typVzajemnychZapoctu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence majetek-udalost (Události) Actions.
     *
     * @var array
     */
 static public $majetekUdalost = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence udalost (Události, aktivity) Actions.
     *
     * @var array
     */
 static public $udalost = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence ulozene-priznani-dph (Uložené přiznání DPH) Actions.
     *
     * @var array
     */
 static public $ulozenePriznaniDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence radek-priznani-dph (Uložené řádky přiznání DPH) Actions.
     *
     * @var array
     */
 static public $radekPriznaniDph = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni (Umístění) Actions.
     *
     * @var array
     */
 static public $umisteni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuRegal = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuPolice = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Actions.
     *
     * @var array
     */
 static public $umisteniVeSkladuMistnost = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sablona-upominky (Upomínky) Actions.
     *
     * @var array
     */
 static public $sablonaUpominky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence umisteni-uctu (Upřesnění umístění účtu) Actions.
     *
     * @var array
     */
 static public $umisteniUctu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence strom (Uzel stromu) Actions.
     *
     * @var array
     */
 static public $strom = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotaz = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sablona-mail (Uživatelské e-mailové šablony) Actions.
     *
     * @var array
     */
 static public $sablonaMail = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence filtr (Uživatelské filtry) Actions.
     *
     * @var array
     */
 static public $filtr = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence custom-button (Uživatelské tlačítko) Actions.
     *
     * @var array
     */
 static public $customButton = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence xslt (Uživatelské transformace) Actions.
     *
     * @var array
     */
 static public $xslt = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Actions.
     *
     * @var array
     */
 static public $uzivatelskaVazba = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Actions.
     *
     * @var array
     */
 static public $stromCenik = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence vazba (Vazby dokladu) Actions.
     *
     * @var array
     */
 static public $vazba = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Actions.
     *
     * @var array
     */
 static public $uzivatelskyDotazVlastnost = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence faktura-vydana (Vydané faktury) Actions.
     *
     * @var array
     */
 static public $fakturaVydana = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'sign-for-payment' => [
    'actionId' => 'sign-for-payment',
    'actionName' => 'Podepsat k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unsign-for-payment' => [
    'actionId' => 'unsign-for-payment',
    'actionName' => 'Zrušit podpis k úhradě',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-preplatky' => [
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'uhrad-zapoctem' => [
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Actions.
     *
     * @var array
     */
 static public $nabidkaVydana = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Actions.
     *
     * @var array
     */
 static public $objednavkaVydana = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Actions.
     *
     * @var array
     */
 static public $poptavkaVydana = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Actions.
     *
     * @var array
     */
 static public $hodnoceniZakazky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Actions.
     *
     * @var array
     */
 static public $vzajemnyZapocet = [
  'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ],
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'storno' => [
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ],
  'odeslani-mailem' => [
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ],
];
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Actions.
     *
     * @var array
     */
 static public $vykazHospodareni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Actions.
     *
     * @var array
     */
 static public $vyrobniCislo = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence zakazka (Zakázky) Actions.
     *
     * @var array
     */
 static public $zakazka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Actions.
     *
     * @var array
     */
 static public $formaUhradyZauctovani = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Actions.
     *
     * @var array
     */
 static public $intrastatZvlastniPohyb = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence zapujcka (Zápůjčky) Actions.
     *
     * @var array
     */
 static public $zapujcka = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence rada (dokladové řady) Actions.
     *
     * @var array
     */
 static public $rada = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence prodejka-platba (Úhrada) Actions.
     *
     * @var array
     */
 static public $prodejkaPlatba = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence global-store (Úložiště globálního nastavení) Actions.
     *
     * @var array
     */
 static public $globalStore = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence setting-store (Úložiště nastavení) Actions.
     *
     * @var array
     */
 static public $settingStore = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Actions.
     *
     * @var array
     */
 static public $analyzaZakazky = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence ucetni-denik (Účetní deník) Actions.
     *
     * @var array
     */
 static public $ucetniDenik = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence ucetni-obdobi (Účetní období) Actions.
     *
     * @var array
     */
 static public $ucetniObdobi = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence ucetni-odpis (Účetní odpisy) Actions.
     *
     * @var array
     */
 static public $ucetniOdpis = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence ucet (Účtový rozvrh) Actions.
     *
     * @var array
     */
 static public $ucet = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cinnost (Činnost) Actions.
     *
     * @var array
     */
 static public $cinnost = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 static public $typStavuCeniku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 static public $stavCeniku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cislo-baliku (Čísla balíků) Actions.
     *
     * @var array
     */
 static public $cisloBaliku = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence radek-sestavy (Řádek sestavy) Actions.
     *
     * @var array
     */
 static public $radekSestavy = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Actions.
     *
     * @var array
     */
 static public $cleneniKontrolniHlaseni = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence pricteni-rozdilu (Řádky pro přičtení rozdílu) Actions.
     *
     * @var array
     */
 static public $pricteniRozdilu = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence sarze-expirace (Šarže a expirace) Actions.
     *
     * @var array
     */
 static public $sarzeExpirace = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence stitek (Štítky) Actions.
     *
     * @var array
     */
 static public $stitek = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence zurnal (Žurnál) Actions.
     *
     * @var array
     */
 static public $zurnal = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
    /**
     * Evidence smlouva-zurnal (Žurnál pro smlouvy) Actions.
     *
     * @var array
     */
 static public $smlouvaZurnal = [
  'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ],
  'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
  'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ],
];
}
