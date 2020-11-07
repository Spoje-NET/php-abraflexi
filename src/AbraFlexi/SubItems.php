<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
