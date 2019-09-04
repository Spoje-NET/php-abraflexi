<?php
/**
 * FlexiPeeHP - Evidence Full actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2019 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Helper class for work with multiplete documents
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Evidence extends \Ease\Sand
{
    /**
     *
     * @var FlexiBeeRO 
     */
    public $engine = null;

    /**
     *
     * @var array 
     */
    public $conditions = [];

    /**
     * 
     * @param \FlexiPeeHP\FlexiBeeRO $engine
     * 
     * @param array $conditions
     */
    public function __construct(FlexiBeeRO $engine, array $conditions = [])
    {
        $this->engine     = $engine;
        $this->conditions = $conditions;
    }

    /**
     * Array of objects in eveidence
     * 
     * @return FlexiBeeRO[]
     */
    public function getEvidenceContent()
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
