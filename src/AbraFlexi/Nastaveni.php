<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt nastavení.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Nastavení firmy
 *
 * @note Tato položka nemá dostupné položky evidence
 * @note Tato evidence není veřejně dostupná na demo.abraflexi.eu
 */
class Nastaveni extends RO
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'nastaveni';
}
