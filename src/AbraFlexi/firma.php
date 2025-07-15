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
trait firma
{
    /**
     * Here Customer's or Provider's comany object live.
     */
    public ?\AbraFlexi\Adresar $firma = null;

    /**
     * Instance of Adresar( $this->getDataValue('firma') ).
     *
     * @param array $options for new Object
     *
     * @return Adresar
     */
    public function getFirmaObject($options = ['details' => 'id'])
    {
        if (null === $this->firma) {
            $this->firma = new Adresar($this->getDataValue('firma'), $options);
        }

        return $this->firma;
    }
}
