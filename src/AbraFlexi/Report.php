<?php

declare(strict_types=1);

/**
 * AbraFlexi - Custom Report object.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2020-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Report
 *
 * @author vitex
 */
class Report extends RW
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     *
     * @var string
     */
    public $evidence = 'report';

    /**
     * Načte záznam z AbraFlexi a uloží v sobě jeho data
     * Read AbraFlexi record and store it inside od object
     *
     * @param int|string $id ID or conditions
     *
     * @return int počet načtených položek
     */
    public function loadFromAbraFlexi($id = null)
    {
        if (is_string($id) && strstr($id, 'code:')) { //Dirty Hack ⚠ Error 400: Entita 'Report' neobsahuje kód nebo ho nelze použít jako ID (není unikátní)
            $kod = \AbraFlexi\RO::uncode($id);
            $candidates = $this->getColumnsFromAbraFlexi(['id', 'kod'], ['kod' => $kod], 'kod');
            if (array_key_exists($kod, $candidates)) {
                $id = intval($candidates[\AbraFlexi\RO::uncode($id)]['id']);
            } else {
                $this->lastResponseCode = 404;
            }
        }
        return is_numeric($id) ? parent::loadFromAbraFlexi($id) : 0;
    }
}
