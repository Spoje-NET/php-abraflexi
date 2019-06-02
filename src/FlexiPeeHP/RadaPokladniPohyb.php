<?php
/**
 * FlexiPeeHP - Objekt řady pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Číselná řada pokladního pohybu
 */
class RadaPokladniPohyb extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'rada-pokladni-pohyb';

    /**
     * Obtain code for new Record
     *
     * @param string $code
     * @return string
     */
    public function getNextRecordCode($code = null)
    {
        if (is_null($code)) {
            $code = $this->getMyKey();
        }
        $crID = null;
        if (is_string($code)) {
            $sro = $this->performRequest($this->evidence.'/(kod=\''.$code.'\').json');
            if (count($sro[$this->evidence])) {
                $crID = current(current($sro[$this->evidence]));
            }
        } else {
            $crID = $code;
        }

        $cr                = $this->performRequest($this->evidence.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->evidence]);
        $crInfo            = end($radaPokladniPohyb['polozkyRady']);

        $cislo = $crInfo['cisAkt'] + 1;
        if ($crInfo['zobrazNuly'] == 'true') {
            return $crInfo['prefix'].sprintf('%\'.0'.$crInfo['cisDelka'].'d',
                    $cislo).'/'.date('y');
        } else {
            return $crInfo['prefix'].$cislo.'/'.date('y');
        }
    }

    /**
     * Zvedne číslo dokladu
     *
     * @param string $code
     * @return int číslo nového dokladu
     */
    public function incrementNextRecordCode($code = null)
    {
        if (is_null($code)) {
            $code = $this->getMyKey();
        }

        if (is_string($code)) {
            $sro  = $this->performRequest($this->evidence.'/(kod=\''.$code.'\').json');
            $crID = current(current($sro[$this->evidence]));
        } else {
            $crID = $code;
        }

        $cr                = $this->performRequest($this->evidence.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->evidence]);
        $crInfo            = end($radaPokladniPohyb['polozkyRady']);

        $cislo = $crInfo['cisAkt'] + 1;
        return $cislo;
    }
}
