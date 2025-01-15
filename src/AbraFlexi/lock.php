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
 */
trait lock
{
    public function locked(): bool
    {
        $lockValue = $this->getDataValue('zamekK');
        if(is_null($lockValue)){
            throw new \InvalidArgumentException('unset zamekK',1);
        }
        return $lockValue === 'zamek.otevreno';
    }

    public function getLockType(): string
    {
        $lockValue = $this->getDataValue('zamekK');
        if(is_null($lockValue)){
            throw new \InvalidArgumentException('unset zamekK',1);
        }
        return str_replace('zamek.', '', $lockValue);
    }

    public function lock(): bool
    {
        return $this->performAction('unlock');
    }

    public function unlock(): bool
    {
        return $this->performAction('unlock');
    }
}
