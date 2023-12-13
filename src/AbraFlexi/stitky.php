<?php

declare(strict_types=1);

/**
 * AbraFlexi - Document Default Address support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add for Objects use with "firma" data column
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait stitky
{
    /**
     * Get all labels for current record
     *
     * @return array
     */
    public function getLabels()
    {
        return Stitek::listToArray($this->getDataValue('stitky'));
    }

    /**
     * Set one of availble Labels for current record
     *
     * @param string $label
     *
     * @return boolean Operation success
     */
    public function setLabel($label)
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky' => $label]);
        return $this->lastResponseCode == 201;
    }

    /**
     * UnSet Label for Current Object record
     *
     * @param string|array $labelsToRemove Label/Labels
     *
     * @return boolean   success result ?
     */
    public function unsetLabel($labelsToRemove)
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky@removeAll' => 'true',
            'stitky' => array_diff_key(
                $this->getLabels(),
                Stitek::listToArray($labelsToRemove)
            )]);
        return $this->lastResponseCode == 201;
    }

    /**
     * UnSet all Labels for Current Object record
     *
     * @return boolean   success result ?
     */
    public function unsetLabels()
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky@removeAll' => 'true']);
        return $this->lastResponseCode == 201;
    }
}
