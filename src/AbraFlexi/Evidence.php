<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

use Ease\Sand;

/**
 * Helper class for work with multiplete documents.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Evidence extends Sand
{
    public RO $engine = null;
    public array $conditions = [];

    public function __construct(RO $engine, array $conditions = [])
    {
        $this->engine = $engine;
        $this->conditions = $conditions;
    }

    /**
     * Array of objects in eveidence.
     *
     * @return array
     */
    public function getEvidenceData()
    {
        return $this->engine->getColumnsFromAbraFlexi(\array_key_exists(
            'detail',
            $this->conditions,
        ) ? $this->conditions['detail'] : 'full', $this->conditions);
    }

    /**
     * Array of objects in eveidence.
     *
     * @return RO[]
     */
    public function getEvidenceObjects()
    {
        $contents = [];

        foreach (
            $this->engine->getColumnsFromAbraFlexi(
                \array_key_exists(
                    'detail',
                    $this->conditions,
                ) ? $this->conditions['detail'] : 'full',
                $this->conditions,
            ) as $pos => $recordData
        ) {
            $contents[$pos] = clone $this->engine;
            $contents[$pos]->setData($recordData, true);
        }

        return $contents;
    }

    /**
     * get used evidence name.
     *
     * @return string
     */
    public function getEvidence()
    {
        return $this->engine->getEvidence();
    }
}
