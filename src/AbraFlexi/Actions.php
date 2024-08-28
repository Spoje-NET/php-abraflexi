<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * EvidenceActions.
 *
 * @see https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */
class Actions
{
    /**
     * Source AbraFlexi server version.
     */
    public static string $version = '2024.5.3';

    /**
     * Evidence adresar (Adresy firem) Actions.
     */
    public static array $adresar = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mzda = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $analyzaNakupu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $analyzaProdeje = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $atribut = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $autotisk = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $banka = [
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
     */
    public static array $formatElektronickehoBankovnictvi = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $adresarBankovniUcet = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mzdyBankovniSpojeni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $bankovniUcetPokladna = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $bankovniUcetSkladPokladna = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenovaUroven = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $odberatel = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenik = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenikovaSkupina = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $certifikacniAutorita = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $certifikat = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $danovyNaklad = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $danovyOdpis = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatDodaciPodminky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dodavatelskaSmlouva = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $dodavatel = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaBanka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaInternihoDokladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaPohledavky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaPokladniPohyb = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaFakturyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaNabidkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaObjednavkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaPoptavkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaSkladovyPohyb = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaFakturyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaNabidkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaObjednavkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaPoptavkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radaZavazku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dokladKUhrade = [
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
     * Evidence doporuceni (Doporučení) Actions.
     */
    public static array $doporuceni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatDruhDopravy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dite = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenikObal = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $formaDopravy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $formaUhrady = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $osobaHlavicka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $hlavniKniha = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $individualniCenik = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $insight = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $interniDoklad = [
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
     */
    public static array $inventura = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $certifikatFinbricks = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $konstSymbol = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $kontakt = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatKrajUrceni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $kurz = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatKurz = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $kurzProCenotvorbu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $kurzProPreceneni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $kusovnik = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $intrastatKodNomenklatury = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $leasing = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $majetek = [
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
     */
    public static array $mapovaniSkladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mzdovaSlozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mistoUrceni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mena = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatMernaJednotka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $mernaJednotka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $nastaveni = [
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
     */
    public static array $vazebniDoklad = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $nepritomnost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $poSplatnosti = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $naklad = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenikovyPohybNakup = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenikovyPohybProdej = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatObchodniTransakce = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stromKoren = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $obratovaPredvaha = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $obrat = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $smlouva = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $odpisovaSkupina = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $uzivatel = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pohledavka = [
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
     */
    public static array $zavazek = [
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
     */
    public static array $uzivatelskyDotazParametr = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $penezniUstav = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $osoba = [
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
     */
    public static array $podkladyDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $podobneZbozi = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pohybNaUctech = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pokladniPohyb = [
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
     */
    public static array $parametr = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prikazKInkasuPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prikazKUhradePolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $interniDokladPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $inventuraPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $obratPolozky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pohledavkaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $zavazekPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $pokladniPohybPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $nabidkaPrijataPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $objednavkaPrijataPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $fakturaPrijataPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $poptavkaPrijataPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $skladovyPohybPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $smlouvaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $nabidkaVydanaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $objednavkaVydanaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $poptavkaVydanaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $fakturaVydanaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $bankaPolozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
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
     */
    public static array $poplatek = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pracovniPomer = [
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
     */
    public static array $pracovniPomerHlavicka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prodejka = [
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
     */
    public static array $prace = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $praceMesic = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pravoViditelnosti = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $text = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $predpisZauctovani = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $doklad = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prehledZamestnancu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $fakturaPrijata = [
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
     */
    public static array $nabidkaPrijata = [
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
     */
    public static array $objednavkaPrijata = [
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
     */
    public static array $poptavkaPrijata = [
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
     */
    public static array $skladovyPohyb = [
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
     */
    public static array $prikazKInkasu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prikazKUhrade = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $priloha = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prislustenstvi = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $rezervace = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $rocniRada = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sadyAKomplety = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $saldo = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sazbaDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dashboardSharing = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $bankovniUcet = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pokladna = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typProdejky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sestava = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sklad = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $preneseniDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skladovaKarta = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaAtributu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaFirem = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaOsob = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaPlneni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaZbozi = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $skupinaStitku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $smena = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $souhrnneHlaseniDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $rozvahaPoUctech = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $vysledovkaPoUctech = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $splatkovyKalendar = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dashboardPanel = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $srazka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $standardniPredpis = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stavObchodnihoDokladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stavSkladuKDatu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $saldoKDatu = [
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
     */
    public static array $stavSmlouvy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stavZakazky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stavUctu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stalaMzdovaSlozka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stat = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stredisko = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $subjekt = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sumaceSestavy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typOrganizace = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typPracovnihoPomeru = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cenikTypSazbyDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typAtributu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typBanka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $dodavatelskyTypSmlouvy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typDokladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typInternihoDokladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typLeasingu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typMajetku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typNakladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typSmlouvy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typPohledavky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typZavazku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typPokladniPohyb = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typFakturyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typNabidkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typObjednavkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typPoptavkyPrijate = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typSkladovyPohyb = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typAktivity = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typUzivatelskeVazby = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typFakturyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typNabidkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typObjednavkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typPoptavkyVydane = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typZakazky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typVzajemnychZapoctu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $majetekUdalost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $udalost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ulozenePriznaniDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radekPriznaniDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteniVeSkladu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteniVeSkladuRegal = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteniVeSkladuPolice = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteniVeSkladuMistnost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sablonaUpominky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $umisteniUctu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $strom = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $uzivatelskyDotaz = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sablonaMail = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $filtr = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $report = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $role = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $customButton = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $xslt = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $uzivatelskaVazba = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stromCenik = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $vazba = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $uzivatelskyDotazVlastnost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $fakturaVydana = [
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
     */
    public static array $nabidkaVydana = [
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
     */
    public static array $objednavkaVydana = [
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
     */
    public static array $poptavkaVydana = [
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
     */
    public static array $hodnoceniZakazky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $vzajemnyZapocet = [
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
     */
    public static array $vykazHospodareni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $vyrobniCislo = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $zakazka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $zamek = [
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
     */
    public static array $formaUhradyZauctovani = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $intrastatZvlastniPohyb = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $zalohaKOdpoctu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $zapujcka = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $rada = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $prodejkaPlatba = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $globalStore = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $settingStore = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $analyzaZakazky = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ucetniDenik = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ucetniDenikZjednoduseny = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ucetniObdobi = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ucetniOdpis = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ucet = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cinnost = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $castkyKOdpoctu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $ciselnikMzdovychSlozek = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $typStavuCeniku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stavCeniku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cisloBaliku = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $radekSestavy = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $cleneniKontrolniHlaseni = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $pricteniRozdilu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $sarzeExpirace = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $stitek = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $zurnal = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     */
    public static array $smlouvaZurnal = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
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
