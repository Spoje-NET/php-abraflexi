<?php

declare(strict_types=1);

/**
 * AbraFlexi - Document Default Address support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add for Objects use with "firma" data column
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait firma
{
    /**
     * Here Customer's or Provider's comany object live
     * @var \AbraFlexi\Adresar|null
     */
    public $firma = null;

    /**
     * Instance of Adresar( $this->getDataValue('firma') )
     *
     * @param array $options for new Object
     *
     * @return Adresar
     */
    public function getFirmaObject($options = ['details' => 'id'])
    {
        if (is_null($this->firma)) {
            $this->firma = new Adresar($this->getDataValue('firma'), $options);
        }
        return $this->firma;
    }
}
