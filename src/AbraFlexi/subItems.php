<?php

declare(strict_types=1);

/**
 * AbraFlexi - Subitems.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Document SubItems functions
 *
 * @author vitex
 */
trait subItems
{
    /**
     * Subitems - ex. items of invoice
     *
     * @return array of document items or null
     */
    public function getSubItems()
    {
        return $this->getDataValue($this->getSubmenuName());
    }

    /**
     *
     * @param array $subitems
     *
     * @return type
     */
    public function setSubitems(array $subitems)
    {
        return $this->setDataValue($this->getSubmenuName(), $subitems);
    }

    /**
     *
     * @return type
     */
    public function getSubMenuName()
    {
        return array_key_exists('polozkyFaktury', $this->getData()) ? 'polozkyFaktury'
                : (array_key_exists('polozkyDokladu', $this->getData()) ? 'polozkyDokladu'
                : null);
    }

    /**
     *
     * @return \AbraFlexi\RW
     */
    public function getSubObjects()
    {
        $subEvidence = $this->getEvidence() . '-polozka';
        $subClass = str_replace(
            ' ',
            '',
            ucwords(str_replace('-', ' ', $subEvidence))
        );
        if (class_exists($subClass) === false) {
            $subClass = 'RW';
        }

        $subObjects = [];
        foreach ($this->getSubItems() as $subItemData) {
            $subObjects[$subItemData['id']] = new $subClass(
                $subItemData,
                ['evidence' => $subEvidence]
            );
        }
        return $subObjects;
    }
}
