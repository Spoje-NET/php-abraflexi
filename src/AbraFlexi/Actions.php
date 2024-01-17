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
    public static $version = '2024.1.2';

    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array
     */
    public static $adresar = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence mzda (Aktualizace mezd) Actions.
     *
     * @var array
     */
    public static $mzda = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence analyza-nakupu (Analýza nákupu) Actions.
     *
     * @var array
     */
    public static $analyzaNakupu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence analyza-prodeje (Analýza prodeje) Actions.
     *
     * @var array
     */
    public static $analyzaProdeje = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $atribut = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $autotisk = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $banka = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    public static $formatElektronickehoBankovnictvi = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $adresarBankovniUcet = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence mzdy-bankovni-spojeni (Bankovní spojení) Actions.
     *
     * @var array
     */
    public static $mzdyBankovniSpojeni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $bankovniUcetPokladna = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $bankovniUcetSkladPokladna = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenovaUroven = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $odberatel = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenik = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenikovaSkupina = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $certifikacniAutorita = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $certifikat = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $danovyNaklad = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $danovyOdpis = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatDodaciPodminky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $dodavatelskaSmlouva = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $dodavatel = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaBanka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaInternihoDokladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaPohledavky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaPokladniPohyb = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaFakturyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaNabidkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaObjednavkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaPoptavkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaSkladovyPohyb = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaFakturyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaNabidkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaObjednavkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaPoptavkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radaZavazku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $dokladKUhrade = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Actions.
     *
     * @var array
     */
    public static $intrastatDruhDopravy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence dite (Dítě) Actions.
     *
     * @var array
     */
    public static $dite = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenikObal = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $formaDopravy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $formaUhrady = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence osoba-hlavicka (Hlavičky osob) Actions.
     *
     * @var array
     */
    public static $osobaHlavicka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $hlavniKniha = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $individualniCenik = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $insight = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $interniDoklad = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence inventura (Inventury) Actions.
     *
     * @var array
     */
    public static $inventura = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $certifikatFinbricks = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $konstSymbol = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $kontakt = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatKrajUrceni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $kurz = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatKurz = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $kurzProCenotvorbu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $kurzProPreceneni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $kusovnik = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $intrastatKodNomenklatury = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $leasing = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $majetek = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    public static $mapovaniSkladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence mzdova-slozka (Mzdové složky - vstup a výběry) Actions.
     *
     * @var array
     */
    public static $mzdovaSlozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $mistoUrceni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $mena = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatMernaJednotka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $mernaJednotka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence nastaveni (Nastavení) Actions.
     *
     * @var array
     */
    public static $nastaveni = [
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence vazebni-doklad (Navázané doklady) Actions.
     *
     * @var array
     */
    public static $vazebniDoklad = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence nepritomnost (Nepřítomnost) Actions.
     *
     * @var array
     */
    public static $nepritomnost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $poSplatnosti = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $naklad = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenikovyPohybNakup = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenikovyPohybProdej = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatObchodniTransakce = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stromKoren = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $obratovaPredvaha = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $obrat = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $smlouva = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $odpisovaSkupina = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence uzivatel (Osoby a uživatelé) Actions.
     *
     * @var array
     */
    public static $uzivatel = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pohledavka = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence zavazek (Ostatní závazky) Actions.
     *
     * @var array
     */
    public static $zavazek = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Actions.
     *
     * @var array
     */
    public static $uzivatelskyDotazParametr = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $penezniUstav = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence osoba (Personalistika) Actions.
     *
     * @var array
     */
    public static $osoba = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence podklady-dph (Podklady DPH) Actions.
     *
     * @var array
     */
    public static $podkladyDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $podobneZbozi = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pohybNaUctech = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pokladniPohyb = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    public static $parametr = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prikazKInkasuPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prikazKUhradePolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $interniDokladPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $inventuraPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence obrat-polozky (Položky obratů) Actions.
     *
     * @var array
     */
    public static $obratPolozky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pohledavkaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $zavazekPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $pokladniPohybPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $nabidkaPrijataPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $objednavkaPrijataPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $fakturaPrijataPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $poptavkaPrijataPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $skladovyPohybPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $smlouvaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $nabidkaVydanaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $objednavkaVydanaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $poptavkaVydanaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $fakturaVydanaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $bankaPolozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
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
    public static $poplatek = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence pracovni-pomer (Pracovní poměr) Actions.
     *
     * @var array
     */
    public static $pracovniPomer = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence pracovni-pomer-hlavicka (Pracovní poměr) Actions.
     *
     * @var array
     */
    public static $pracovniPomerHlavicka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prodejka = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence prace (Práce pro střediska) Actions.
     *
     * @var array
     */
    public static $prace = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence prace-mesic (Práce pro střediska) Actions.
     *
     * @var array
     */
    public static $praceMesic = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence pravo-viditelnosti (Práva viditelnosti dat) Actions.
     *
     * @var array
     */
    public static $pravoViditelnosti = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $text = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $predpisZauctovani = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $doklad = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence prehled-zamestnancu (Přehled zaměstnanců) Actions.
     *
     * @var array
     */
    public static $prehledZamestnancu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $fakturaPrijata = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Actions.
     *
     * @var array
     */
    public static $nabidkaPrijata = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Actions.
     *
     * @var array
     */
    public static $objednavkaPrijata = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Actions.
     *
     * @var array
     */
    public static $poptavkaPrijata = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Actions.
     *
     * @var array
     */
    public static $skladovyPohyb = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Actions.
     *
     * @var array
     */
    public static $prikazKInkasu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prikazKUhrade = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $priloha = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prislustenstvi = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $rezervace = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $rocniRada = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sadyAKomplety = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $saldo = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sazbaDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $dashboardSharing = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $bankovniUcet = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pokladna = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typProdejky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sestava = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sklad = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $preneseniDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $skladovaKarta = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $skupinaAtributu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $skupinaFirem = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence skupina-osob (Skupiny osob) Actions.
     *
     * @var array
     */
    public static $skupinaOsob = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $skupinaZbozi = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $skupinaStitku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence smena (Směny) Actions.
     *
     * @var array
     */
    public static $smena = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $souhrnneHlaseniDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $rozvahaPoUctech = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $vysledovkaPoUctech = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $splatkovyKalendar = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence dashboard-panel (Správa přehledů) Actions.
     *
     * @var array
     */
    public static $dashboardPanel = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence srazka (Srážka) Actions.
     *
     * @var array
     */
    public static $srazka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $standardniPredpis = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stavObchodnihoDokladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stavSkladuKDatu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $saldoKDatu = [
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
    public static $stavSmlouvy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stavZakazky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stavUctu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence stala-mzdova-slozka (Stálá mzdová složka) Actions.
     *
     * @var array
     */
    public static $stalaMzdovaSlozka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stat = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stredisko = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $subjekt = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sumaceSestavy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typOrganizace = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence typ-pracovniho-pomeru (Typ pracovního poměru) Actions.
     *
     * @var array
     */
    public static $typPracovnihoPomeru = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cenikTypSazbyDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typAtributu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typBanka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $dodavatelskyTypSmlouvy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typDokladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typInternihoDokladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typLeasingu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typMajetku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typNakladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typSmlouvy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typPohledavky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typZavazku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typPokladniPohyb = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typFakturyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typNabidkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typObjednavkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typPoptavkyPrijate = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typSkladovyPohyb = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typAktivity = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typUzivatelskeVazby = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typFakturyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typNabidkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typObjednavkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typPoptavkyVydane = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typZakazky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typVzajemnychZapoctu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $majetekUdalost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $udalost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $ulozenePriznaniDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radekPriznaniDph = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteniVeSkladu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteniVeSkladuRegal = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteniVeSkladuPolice = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteniVeSkladuMistnost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sablonaUpominky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $umisteniUctu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $strom = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $uzivatelskyDotaz = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sablonaMail = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $filtr = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence report (Uživatelské reporty) Actions.
     *
     * @var array
     */
    public static $report = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence role (Uživatelské role) Actions.
     *
     * @var array
     */
    public static $role = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $customButton = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $xslt = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $uzivatelskaVazba = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stromCenik = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $vazba = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $uzivatelskyDotazVlastnost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $fakturaVydana = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Actions.
     *
     * @var array
     */
    public static $nabidkaVydana = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Actions.
     *
     * @var array
     */
    public static $objednavkaVydana = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Actions.
     *
     * @var array
     */
    public static $poptavkaVydana = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Actions.
     *
     * @var array
     */
    public static $hodnoceniZakazky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $vzajemnyZapocet = [
    'lock' => [
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'lock-for-ucetni' => [
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout mimo účetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
    ],
    'unlock' => [
    'actionId' => 'unlock',
    'actionName' => 'Otevřít zámek',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
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
    ];
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Actions.
     *
     * @var array
     */
    public static $vykazHospodareni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $vyrobniCislo = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $zakazka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence zamek (Zamykání období) Actions.
     *
     * @var array
     */
    public static $zamek = [
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
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Actions.
     *
     * @var array
     */
    public static $formaUhradyZauctovani = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $intrastatZvlastniPohyb = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $zapujcka = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $rada = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $prodejkaPlatba = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $globalStore = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $settingStore = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $analyzaZakazky = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $ucetniDenik = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence ucetni-denik-zjednoduseny (Účetní deník - zjednodušený) Actions.
     *
     * @var array
     */
    public static $ucetniDenikZjednoduseny = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $ucetniObdobi = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $ucetniOdpis = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $ucet = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cinnost = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    ];
    /**
     * Evidence ciselnik-mzdovych-slozek (Číselník mzdových složek) Actions.
     *
     * @var array
     */
    public static $ciselnikMzdovychSlozek = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $typStavuCeniku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stavCeniku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cisloBaliku = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $radekSestavy = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $cleneniKontrolniHlaseni = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $pricteniRozdilu = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $sarzeExpirace = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $stitek = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $zurnal = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'delete' => [
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
    public static $smlouvaZurnal = [
    'new' => [
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
    'copy' => [
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
    ],
    'edit' => [
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
    ],
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
