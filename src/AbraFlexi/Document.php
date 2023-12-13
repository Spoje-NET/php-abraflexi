<?php

declare(strict_types=1);

/**
 * AbraFlexi - Document Interface
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 *
 * @author vitex
 */
interface Document
{
    /**
     * Get all labels for current record
     *
     * @return array
     */
    public function getLabels();

    /**
     * Set one of availble Labels for current record
     *
     * @param string $label
     *
     * @return boolean Operation success
     */
    public function setLabel($label);

    /**
     * UnSet Label for Current Object record
     *
     * @param string|array $labelsToRemove Label name
     *
     * @return boolean   success result ?
     */
    public function unsetLabel($labelsToRemove);

    /**
     * UnSet all Labels for Current Object record
     *
     * @return boolean   success result ?
     */
    public function unsetLabels();

    /**
     * Instance of Adresar( $this->getDataValue('firma') )
     *
     * @param array $options for new Object
     *
     * @return Adresar
     */
    public function getFirmaObject($options = ['details' => 'id']);

    /**
     * Vrací z AbraFlexi sumaci i podle podmínek.
     *
     * @param array           $conditions  pole podmínek nebo ID záznamu
     *
     * @return array
     */
    public function getSumFromAbraFlexi($conditions = []);

    /**
     * Subitems - ex. items of invoice
     *
     * @return array of document items or null
     */
    public function getSubItems();

    /**
     *
     * @param array $subitems
     *
     * @return bool
     */
    public function setSubitems(array $subitems);

    /**
     *
     * @return string
     */
    public function getSubMenuName();

    /**
     * Array of SubItem objects
     *
     * @return array
     */
    public function getSubObjects();

    /**
     * Get recipient for documnet.
     *
     * 1. try Document's "kontaktEmail" field
     * 2. try Document's company email
     * 3. try Document's primary contact mail
     * 4. try Document's any contact mail
     *
     * @return string
     */
    public function getEmail();

    /**
     * Obtain Chaneges from Journal
     */
    function getChanges();
}
