<?php

/**
 * AbraFlexi - Relation class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Relation
 *
 * @author vitex
 */
class Relation
{
    /**
     * Item in target evidence
     * @var string|array
     */
    public $value;

    /**
     * Taget evidence name
     * @var string
     */
    public $target;

    /**
     *
     * @var string
     */
    public $ref;

    /**
     *
     * @var string
     */
    public $showAs;

    /**
     * Relation
     *
     * @param string|array $item     Record identifier
     * @param string       $evidence Record's evidence
     * @param string       $ref      Reference path
     * @param string       $showAs   Item caption
     */
    public function __construct($item, string $evidence, $ref = null, $showAs = null)
    {
        $this->value = $item;
        $this->target = $evidence;
        $this->ref = $ref;
        $this->showAs = $showAs;
    }

    /**
     * Render value as string
     *
     * @return string
     */
    public function __toString()
    {
        return is_array($this->value) ? current($this->value) : $this->value;
    }

    /**
     * Obtain Relation target as Object
     *
     * @return \AbraFlexi\RO
     */
    public function getRelationTarget()
    {
        $engineClass = Functions::evidenceToClassName($this->target);
        if (class_exists($engineClass)) {
            $relation = new $engineClass($this->value);
        } else {
            if (EvidenceList::$evidences[$this->target]['importStatus'] == 'SUPPORTED') {
                $relation = new RW($this->value);
            } else {
                $relation = new RO($this->value);
            }
        }
        return $relation;
    }
}
