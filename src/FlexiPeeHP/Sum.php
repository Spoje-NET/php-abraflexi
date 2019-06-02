<?php
/**
 * FlexiPeeHP - Summary support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2019 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Add for evidencies with Summary support
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Sum
{

    /**
     * Vrací z FlexiBee sumaci i podle podmínek.
     *
     * @param array           $conditions  pole podmínek nebo ID záznamu
     *
     * @return array
     */
    public function getSumFromFlexibee($conditions = [])
    {
        $flexiData = $this->getFlexiData('$sum', $conditions);
        return empty($flexiData) ? null : $flexiData['sum'];
    }
}
