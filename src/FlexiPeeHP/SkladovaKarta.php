<?php
/**
 * FlexiPeeHP - Objekt Skladové karty.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Skladová Karta
 * Storage Card
 *
 * @link https://demo.flexibee.eu/c/demo/skladova-karta/properties položky evidence
 */
class SkladovaKarta extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     *
     * @var string
     */
    public $evidence = 'skladova-karta';

}
