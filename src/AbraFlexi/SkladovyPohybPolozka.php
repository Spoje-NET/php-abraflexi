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
 * Položka skladového pohybu.
 *
 * @see https://demo.flexibee.eu/c/demo/skladovy-pohyb-polozka/properties
 */
class SkladovyPohybPolozka extends RW
{
    use stitky;

    /**
     * Evidence užitá objektem.
     */
    public string $evidence = 'skladovy-pohyb-polozka';

    /**
     * Add Items Serial Number.
     *
     * @param string $number serial number
     * @param bool   $isMain main number
     *
     * @return bool Success
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

        $this->setDataValue('mnozMj', empty($crrentSerialNumbers) ? 0 : \count($crrentSerialNumbers) + 1);

        return $this->addArrayToBranch($numberBranch, 'vyrobniCislaPrijata');
    }
}
