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
 * Description of Report.
 *
 * @author vitex
 */
class Report extends RW
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     */
    public ?string $evidence = 'report';

    /**
     * Načte záznam z AbraFlexi a uloží v sobě jeho data
     * Read AbraFlexi record and store it inside od object.
     *
     * @param int|string $id ID or conditions
     *
     * @return int počet načtených položek
     */
    public function loadFromAbraFlexi($id = null)
    {
        if (\is_string($id) && strstr($id, 'code:')) { // Dirty Hack ⚠ Error 400: Entita 'Report' neobsahuje kód nebo ho nelze použít jako ID (není unikátní)
            $kod = \AbraFlexi\Functions::uncode((string)$id);
            $candidates = $this->getColumnsFromAbraFlexi(['id', 'kod'], ['kod' => $kod], 'kod');

            if (\array_key_exists($kod, $candidates)) {
                $id = (int) $candidates[\AbraFlexi\Functions::uncode((string)$id)]['id'];
            } else {
                $this->lastResponseCode = 404;
            }
        }

        return is_numeric($id) ? parent::loadFromAbraFlexi($id) : 0;
    }
}
