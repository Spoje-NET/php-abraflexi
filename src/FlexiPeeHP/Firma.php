<?php
/**
 * FlexiPeeHP - Document Default Address support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2019 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Add for Objects use with "firma" data column
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Firma
{
    /**
     * Here Customer's or Provider's comany object live
     * @var \FlexiPeeHP\Adresar
     */
    public $firma = null;

    /**
     * Instance of Adresar( $this->getDataValue('firma') ) 
     * 
     * @return Adresar
     */
    public function getFirmaObject()
    {
        if (is_null($this->firma)) {
            $this->firma = new Adresar($this->getDataValue('firma'),
                ['details' => 'id']);
        }
        return $this->firma;
    }
}
