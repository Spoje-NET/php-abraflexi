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

/**
 * Add for evidencies with Summary support.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
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
