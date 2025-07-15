<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Supported evidences:

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
 * Obtain record changes.
 *
 * @author vitex
 *
 * @see http://podpora.flexibee.eu/cs/articles/5784862-prehled-zmen-zaznamu-v-rest-api
 *
 * @no-named-arguments
 */
trait getChanges
{
    /**
     * Obtain Chaneges from Journal.
     *
     * @return array Changes obtained
     */
    public function getChanges()
    {
        $changesRaw = $this->performRequest($this->addDefaultUrlParams($this->getApiURL().'/zmeny.json'));

        if ($changesRaw) {
            $changes = $changesRaw['zmeny'];
        }

        return \is_array($changesRaw) && \array_key_exists('zmeny', $changesRaw) ? $changesRaw['zmeny'] : [];
    }
}
