<?php
/**
 * FlexiPeeHP - Document Default Address support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Add for Objects use with "firma" data column
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Stitky
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
        $this->insertToFlexiBee(['id' => $this->getRecordID(), 'stitky' => $label]);
        return $this->lastResponseCode == 201;
    }

    /**
     * UnSet Label for Current Object record
     *
     * @param string|array $label(s) To Remove
     *
     * @return boolean   success result ?
     */
    public function unsetLabel($labelsToRemove)
    {
        $this->insertToFlexiBee(['id' => $this->getMyKey(), 'stitky@removeAll' => 'true',
            'stitky' => array_diff_key($this->getLabels($this),
                Stitek::listToArray($labelsToRemove))]);
        return $this->lastResponseCode == 201;
    }

    /**
     * UnSet all Labels for Current Object record
     *
     * @return boolean   success result ?
     */
    public function unsetLabels()
    {
        $this->insertToFlexiBee(['id' => $this->getMyKey(), 'stitky@removeAll' => 'true']);
        return $this->lastResponseCode == 201;
    }
}
