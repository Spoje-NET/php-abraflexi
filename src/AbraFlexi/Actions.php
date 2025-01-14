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
    public static string $version = '2024.7.1';

    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * Evidence format-elektronickeho-prikazu (Bankovní formáty) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $formatElektronickehoPrikazu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence definice-ucelu (Definice účelu) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $definiceUcelu = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence prace (Práce pro střediska) Actions.
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence region (Region) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $region = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence stat-dph (Státy DPH) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $statDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence ulozene-priznani-kon-vyk-dph (Uložené přiznání Kontrolního hlášení DPH) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $ulozenePriznaniKonVykDph = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     * Evidence ucel (Účely) Actions.
     *
     * @var array<string, array<string, string>>
     */
    public static array $ucel = [
        'new' => [
            'actionId' => 'new',
            'actionName' => 'Přidat',
            'needInstance' => 'false',
            'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'copy' => [
            'actionId' => 'copy',
            'actionName' => 'Vytvořit kopii',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'ON_MOBILE',
        ],
        'edit' => [
            'actionId' => 'edit',
            'actionName' => 'Změnit',
            'needInstance' => 'true',
            'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
            'isRealAction' => 'false',
            'isService' => 'NO',
        ],
        'delete' => [
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
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
     *
     * @var array<string, array<string, string>>
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
