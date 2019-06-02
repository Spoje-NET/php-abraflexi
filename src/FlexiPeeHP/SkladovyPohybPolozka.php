<?php
/**
 * FlexiPeeHP - Objekt položky skladového pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2018 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Položka skladového pohybu
 *
 * @link https://demo.flexibee.eu/c/demo/skladovy-pohyb-polozka/properties
 */
class SkladovyPohybPolozka extends FlexiBeeRW
{

    use Stitky;
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'skladovy-pohyb-polozka';

    /**
     * Add Items Serial Number
     * 
     * @param string  $number serial number
     * @param boolean $isMain main number
     * 
     * @return boolean Success
     */
    public function addSerialNumber($number, $isMain = false)
    {
        $numberBranch['kod'] = $number;
        $crrentSerialNumbers = $this->getDataValue('vyrobniCislaPrijata');
        if ($isMain) {
            if (!empty($crrentSerialNumbers)) {
                foreach (array_keys($crrentSerialNumbers) as $serialNumberID) {
                    unset($this->data['vyrobniCislaPrijata'][$serialNumberID]['vyrobnicislohlav']);
                }
            }
            $numberBranch['vyrobnicislohlav'] = 1;
        }
        $this->setDataValue('mnozMj', count($crrentSerialNumbers) + 1);
        return $this->addArrayToBranch($numberBranch, 'vyrobniCislaPrijata');
    }
}
