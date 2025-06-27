<?php
    
/**
 * AbraFlexi - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-2025 Spoje.Net
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
 static public $version = '2025.5.2';

    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence format-elektronickeho-prikazu (Bankovní formáty) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $formatElektronickehoPrikazu = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence cenik (Ceník) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence doporuceni (Doporučení) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $doporuceni = [
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
     * Evidence intrastat-druh-dopravy (Druh dopravy) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence region (Kraj) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $region = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence dodavatel (Nákupní ceny) Actions.
     *
     * @var array<string,array<string,string>>
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
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence odberatel (Prodejní ceny) Actions.
     *
     * @var array<string,array<string,string>>
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
     * Evidence prodejka (Prodejní kasa) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence skupina-plneni (Skupiny plnění) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $skupinaPlneni = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence stat-dph (Státy DPH) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $statDph = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence ulozene-priznani-kon-vyk-dph (Uložené přiznání Kontrolního hlášení DPH) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $ulozenePriznaniKonVykDph = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence zaloha-k-odpoctu (Zálohy k odpočtu) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $zalohaKOdpoctu = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence castky-k-odpoctu (Částky k odpočtu) Actions.
     *
     * @var array<string,array<string,string>>
     */
 static public $castkyKOdpoctu = [
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * Evidence radek-priznani-dph (Řádky uloženého přiznání DPH) Actions.
     *
     * @var array<string,array<string,string>>
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
     * Evidence sarze-expirace (Šarže a expirace) Actions.
     *
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
     * @var array<string,array<string,string>>
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
