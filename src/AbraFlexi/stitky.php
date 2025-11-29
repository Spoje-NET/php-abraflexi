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
 * Add for Objects use with "firma" data column.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 *
 * @no-named-arguments
 */
trait stitky
{
    /**
     * Get all labels for current record.
     *
     * @return array<mixed>
     */
    public function getLabels()
    {
        return Stitek::listToArray($this->getDataValue('stitky'));
    }

    /**
     * Set one of available Labels for current record.
     *
     * @param string $label
     *
     * @return bool Operation success
     */
    public function setLabel($label)
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky' => $label]);

        return $this->lastResponseCode === 201;
    }

    /**
     * UnSet Label for Current Object record.
     *
     * @param array<mixed>|string $labelsToRemove Label/Labels
     *
     * @return bool success result ?
     */
    public function unsetLabel($labelsToRemove)
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky@removeAll' => 'true',
            'stitky' => array_diff_key(
                $this->getLabels(),
                Stitek::listToArray($labelsToRemove),
            )]);

        return $this->lastResponseCode === 201;
    }

    /**
     * UnSet all Labels for Current Object record.
     *
     * @return bool success result ?
     */
    public function unsetLabels()
    {
        $this->insertToAbraFlexi(['id' => $this->getRecordIdent(), 'stitky@removeAll' => 'true']);

        return $this->lastResponseCode === 201;
    }
}
