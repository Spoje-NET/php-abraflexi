<?php

/**
 * FlexiPeeHP - Evidence Full actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2019 Spoje.Net
 */

namespace FlexiPeeHP;

use Ease\Sand;
use FlexiPeeHP\RO;

/**
 * Helper class for work with multiplete documents
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Evidence extends Sand
{
    /**
     *
     * @var RO 
     */
    public $engine = null;

    /**
     *
     * @var array 
     */
    public $conditions = [];

    /**
     * 
     * @param RO $engine
     * 
     * @param array $conditions
     */
    public function __construct(RO $engine, array $conditions = [])
    {
        $this->engine     = $engine;
        $this->conditions = $conditions;
    }

    /**
     * Array of objects in eveidence
     * 
     * @return array
     */
    public function getEvidenceData()
    {
        return $this->engine->getColumnsFromFlexibee(array_key_exists('detail',
                $this->conditions) ? $this->conditions['detail'] : 'full', $this->conditions);
    }

    /**
     * Array of objects in eveidence
     * 
     * @return RO[]
     */
    public function getEvidenceObjects()
    {
        $contents = [];
        foreach ($this->engine->getColumnsFromFlexibee(array_key_exists('detail',
                $this->conditions) ? $this->conditions['detail'] : 'full',
            $this->conditions) as $pos => $recordData) {
            $contents[$pos] = clone $this->engine;
            $contents[$pos]->setData($recordData, true);
        }
        return $contents;
    }

    /**
     * get used evidence name
     * 
     * @return string
     */
    public function getEvidence()
    {
        return $this->engine->getEvidence();
    }
}
