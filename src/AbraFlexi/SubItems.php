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
 *
 * @author vitex
 */
trait SubItems {

    /**
     * Subitems - ex. items of invoice
     * 
     * @return array of document items or null
     */
    public function getSubItems() {
        return $this->getDataValue($this->getSubmenuName());
    }

    public function setSubitems(array $subitems) {
        return $this->setDataValue($this->getSubmenuName(), $subitems);
    }

    public function getSubMenuName() {
        return array_key_exists('polozkyFaktury', $this->getData()) ? 'polozkyFaktury' : (array_key_exists('polozkyDokladu', $this->getData()) ? 'polozkyDokladu' : null);
    }

}
