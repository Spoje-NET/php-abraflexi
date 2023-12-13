<?php

declare(strict_types=1);

/**
 * AbraFlexi - Obtain record changes
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2022 Spoje.Net
 *
 */

/* Supported evidencies:

   ✔ Faktury vydané, faktury přijaté
   ✔ Banka, pokladna a interní doklady
   ✔ Přijaté objednávky
   ✘ Vydané objednávky
   ✘ Příjemky/výdejky
   ✔ Adresář
   ✔ Ceník
   ✘ Majetek
   ✘ Cenové úrovně
   ✘ Zakázky
   ✘ Typy dokladů
 */


namespace AbraFlexi;

/**
 * Obtain record changes
 *
 * @author vitex
 * @see http://podpora.flexibee.eu/cs/articles/5784862-prehled-zmen-zaznamu-v-rest-api
 */
trait getChanges
{
    /**
     * Obtain Chaneges from Journal
     *
     * @return array Changes obtained
     */
    function getChanges()
    {
        $changesRaw = $this->performRequest($this->addDefaultUrlParams($this->getApiURL() . '/zmeny.json'));
        if ($changesRaw) {
            $changes = $changesRaw['zmeny'];
        }
        return is_array($changesRaw) && array_key_exists('zmeny', $changesRaw) ?  $changesRaw['zmeny'] : [];
    }
}
