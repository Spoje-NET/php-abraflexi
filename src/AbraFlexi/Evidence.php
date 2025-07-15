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

use Ease\Sand;

/**
 * Helper class for work with multiplete documents.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 *
 * @no-named-arguments
 */
class Evidence extends Sand
{
    public RO $engine;

    /**
     * Conditions for data selection.
     *
     * @var array<string, string>
     */
    public array $conditions = [];

    /**
     * Evidence helper.
     *
     * @param array<string, string> $conditions
     */
    public function __construct(RO $engine, array $conditions = [])
    {
        $this->engine = $engine;
        $this->conditions = $conditions;
    }

    /**
     * Array of objects in evidence.
     *
     * @return array<string, string>
     */
    public function getEvidenceData()
    {
        return $this->engine->getColumnsFromAbraFlexi(\array_key_exists(
            'detail',
            $this->conditions,
        ) ? $this->conditions['detail'] : 'full', $this->conditions);
    }

    /**
     * Array of objects in evidence.
     *
     * @return array<int, RO>
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
