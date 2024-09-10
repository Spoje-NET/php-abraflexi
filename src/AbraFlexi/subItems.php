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
 * Document SubItems functions.
 *
 * @author vitex
 */
trait subItems
{
    /**
     * Subitems - ex. items of invoice.
     *
     * @return array of document items or null
     */
    public function getSubItems()
    {
        return $this->getDataValue($this->getSubmenuName());
    }

    /**
     * @return bool
     */
    public function setSubitems(array $subitems)
    {
        return $this->setDataValue($this->getSubmenuName(), $subitems);
    }

    /**
     * Name for SubItem branch.
     *
     * @return string
     */
    public function getSubMenuName()
    {
        return \array_key_exists('polozkyFaktury', $this->getData()) ? 'polozkyFaktury'
                : (\array_key_exists('polozkyDokladu', $this->getData()) ? 'polozkyDokladu'
                : null);
    }

    /**
     * SubItem object.
     *
     * @return array
     */
    public function getSubObjects()
    {
        $subEvidence = $this->getEvidence() . '-polozka';
        $subClass = str_replace(
            ' ',
            '',
            ucwords(str_replace('-', ' ', $subEvidence)),
        );

        if (class_exists($subClass) === false) {
            $subClass = 'RW';
        }

        $subObjects = [];

        foreach ($this->getSubItems() as $subItemData) {
            $subObjects[$subItemData['id']] = new $subClass(
                $subItemData,
                ['evidence' => $subEvidence],
            );
        }

        return $subObjects;
    }
}
