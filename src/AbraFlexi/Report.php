<?php

declare(strict_types=1);

/**
 * AbraFlexi - Custom Report object.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Report
 *
 * @author vitex
 */
class Report extends RW {

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
    public function loadFromAbraFlexi($id = null) {
        if (strstr($id, 'code:')) { //Dirty Hack ⚠ Error 400: Entita 'Report' neobsahuje kód nebo ho nelze použít jako ID (není unikátní)
            $candidates = $this->getColumnsFromAbraFlexi(['id', 'kod'], null, 'kod');
            if (array_key_exists(\AbraFlexi\RO::uncode($id), $candidates)) {
                $id = intval($candidates[\AbraFlexi\RO::uncode($id)]['id']);
            }
        }
        return parent::loadFromAbraFlexi($id);
    }

    /**
     * Update $this->apiURL
     */
    public function updateApiURL() {
        $code = $this->getDataValue('kod');
        if(empty($code) && is_string($this->init) && preg_match('/^code:/',$this->init) ){
            $this->setDataValue($this->getMyKey(),\AbraFlexi\RO::uncode($this->init));
        } else {
            $this->unsetDataValue('kod');
        }
        parent::updateApiURL();
        if(empty($code) === false){
            $this->setDataValue('kod', $code);
        }
    }

}
