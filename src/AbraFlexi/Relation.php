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
 *
 * @no-named-arguments
 */
class Relation implements \ArrayAccess
{
    /**
     * Item in target evidence.
     */
    public null|array|string $value;

    /**
     * Target evidence name.
     */
    public string $target;
    public ?string $ref;
    public ?string $showAs;
    protected array $data = [];

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
        $options = ['evidence' => $this->target];

        if (class_exists($engineClass)) {
            $relation = new $engineClass($this->value, $options);
        } else {
            if (EvidenceList::$evidences[$this->target]['importStatus'] === 'SUPPORTED') {
                $relation = new RW($this->value, $options);
            } else {
                $relation = new RO($this->value, $options);
            }
        }

        return $relation;
    }

    public function offsetExists(mixed $offset): bool
    {
        return \array_key_exists($offset, $this->data);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->data[$offset]);
    }
}
