<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025-2026 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * @no-named-arguments
 */
class BankovniUcet extends RW
{
    public ?string $evidence = 'bankovni-ucet';

    /**
     * Načte bankovní výpis do tohoto bankovního účtu.
     *
     * @see https://podpora.flexibee.eu/cs/articles/4731153-nacitani-bankovnich-vypisu
     *
     * @param string $vypis  Obsah souboru s bankovním výpisem
     * @param string $format Formát dat pro Content-Type/Accept (txt|xml|csv, dle formátu výpisu)
     *
     * @return bool Načtení proběhlo úspěšně (HTTP 200) ?
     */
    public function nacistVypis(string $vypis, string $format = 'txt'): bool
    {
        $this->postFields = $vypis;
        $this->performRequest($this->getRecordID().'/nacteni-vypisu', 'PUT', $format);

        return $this->lastResponseCode === 200;
    }

    /**
     * Načte bankovní výpis ze souboru do tohoto bankovního účtu.
     *
     * @param string $soubor Cesta k souboru s bankovním výpisem
     *
     * @return bool Načtení proběhlo úspěšně (HTTP 200) ?
     */
    public function nacistVypisZeSouboru(string $soubor): bool
    {
        $format = strtolower(pathinfo($soubor, \PATHINFO_EXTENSION));

        if (!\array_key_exists($format, Formats::bySuffix())) {
            $format = 'txt';
        }

        return $this->nacistVypis(file_get_contents($soubor), $format);
    }
}
