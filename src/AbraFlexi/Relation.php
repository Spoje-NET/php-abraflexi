<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Description of Relation.
 *
 * @author vitex
 */
class Relation
{
    /**
     * Item in target evidence.
     *
     * @var array|string
     */
    public $value;

    /**
     * Target evidence name.
     */
    public string $target;
    public ?string $ref;
    public ?string $showAs;

    /**
     * Relation.
     *
     * @param array|string $item     Record identifier
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
     * Render value as string.
     */
    public function __toString(): string
    {
        return \is_array($this->value) ? (\is_array(current($this->value)) ? current($this->value)['kod'] : current($this->value)) : $this->value;
    }

    /**
     * Obtain Relation target as Object.
     *
     * @return \AbraFlexi\RO
     */
    public function getRelationTarget()
    {
        $engineClass = Functions::evidenceToClassName($this->target);

        if (class_exists($engineClass)) {
            $relation = new $engineClass($this->value);
        } else {
            if (EvidenceList::$evidences[$this->target]['importStatus'] === 'SUPPORTED') {
                $relation = new RW($this->value);
            } else {
                $relation = new RO($this->value);
            }
        }

        return $relation;
    }
}
