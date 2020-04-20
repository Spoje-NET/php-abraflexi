<?php

/**
 * FlexiPeeHP - Custom Report object.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Description of Report
 *
 * @author vitex
 */
class Report extends FlexiBeeRW {

    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     *
     * @var string
     */
    public $evidence = 'report';

    /**
     * Načte záznam z FlexiBee a uloží v sobě jeho data
     * Read FlexiBee record and store it inside od object
     *
     * @param int|string $id ID or conditions
     *
     * @return int počet načtených položek
     */
    public function loadFromFlexiBee($id = null) {
        if (strstr($id, 'code:')) { //Dirty Hack ⚠ Error 400: Entita 'Report' neobsahuje kód nebo ho nelze použít jako ID (není unikátní)
            $candidates = $this->getColumnsFromFlexibee(['id', 'kod'], null, 'kod');
            if (array_key_exists(\FlexiPeeHP\FlexiBeeRO::uncode($id), $candidates)) {
                $id = intval($candidates[\FlexiPeeHP\FlexiBeeRO::uncode($id)]['id']);
            }
        }
        return parent::loadFromFlexiBee($id);
    }

    /**
     * Update $this->apiURL
     */
    public function updateApiURL() {
        $code = $this->getDataValue('kod');
        $this->unsetDataValue('kod');
        $result = parent::updateApiURL();
        $this->setDataValue('kod',$code);
        return $result;
    }

}
