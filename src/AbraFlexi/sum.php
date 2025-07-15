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
trait sum
{
    /**
     * Vrací z AbraFlexi sumaci i podle podmínek.
     *
     * @param array $conditions pole podmínek nebo ID záznamu
     *
     * @return array
     */
    public function getSumFromAbraFlexi($conditions = [])
    {
        $flexiData = $this->getFlexiData('$sum', $conditions);

        return empty($flexiData) ? null : $flexiData['sum'];
    }
}
