<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Číselná řada pokladního pohybu.
 */
class RadaPokladniPohyb extends RW
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'rada-pokladni-pohyb';

    /**
     * Obtain code for new Record.
     *
     * @param string $code
     *
     * @return string
     */
    public function getNextRecordCode($code = null)
    {
        if (null === $code) {
            $code = $this->getMyKey();
        }

        $crID = null;

        if (\is_string($code)) {
            $sro = $this->performRequest($this->evidence.'/(kod=\''.$code.'\').json');

            if (\count($sro[$this->evidence])) {
                $crID = current(current($sro[$this->evidence]));
            }
        } else {
            $crID = $code;
        }

        $cr = $this->performRequest($this->evidence.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->evidence]);
        $crInfo = end($radaPokladniPohyb['polozkyRady']);

        $cislo = $crInfo['cisAkt'] + 1;

        if ($crInfo['zobrazNuly'] === 'true') {
            return $crInfo['prefix'].sprintf(
                '%\'.0'.$crInfo['cisDelka'].'d',
                $cislo,
            ).'/'.date('y');
        }

        return $crInfo['prefix'].$cislo.'/'.date('y');
    }

    /**
     * Zvedne číslo dokladu.
     *
     * @param string $code
     *
     * @return int číslo nového dokladu
     */
    public function incrementNextRecordCode($code = null)
    {
        if (null === $code) {
            $code = $this->getMyKey();
        }

        if (\is_string($code)) {
            $sro = $this->performRequest($this->evidence.'/(kod=\''.$code.'\').json');
            $crID = current(current($sro[$this->evidence]));
        } else {
            $crID = $code;
        }

        $cr = $this->performRequest($this->evidence.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->evidence]);
        $crInfo = end($radaPokladniPohyb['polozkyRady']);

        return $crInfo['cisAkt'] + 1;
    }
}
