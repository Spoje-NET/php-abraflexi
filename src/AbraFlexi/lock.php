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
 * Add for evidences with Summary support.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 *
 * @no-named-arguments
 */
trait lock
{
    /**
     * Check if record is locked.
     *
     * @throws \InvalidArgumentException if zamekK is not set
     */
    public function locked(): bool
    {
        $lockValue = $this->getDataValue('zamekK');

        if (null === $lockValue) {
            throw new \InvalidArgumentException('unset zamekK', 1);
        }

        return $lockValue !== 'zamek.otevreno';
    }

    /**
     * Get lock type. Value of zamekK without "zamek."
     * Most common values are "otevreno" and "uzamceno".
     *
     * @throws \InvalidArgumentException if zamekK is not set
     */
    public function getLockType(): string
    {
        $lockValue = $this->getDataValue('zamekK');

        if (null === $lockValue) {
            throw new \InvalidArgumentException('unset zamekK', 1);
        }

        return str_replace('zamek.', '', $lockValue);
    }

    /**
     * Locks the current record.
     *
     * @return bool true on success, false on failure
     */
    public function lock(): bool
    {
        return $this->performAction('lock');
    }

    /**
     * Unlocks the current record.
     *
     * @return bool true on success, false on failure
     */
    public function unlock(): bool
    {
        return $this->performAction('unlock');
    }
}
