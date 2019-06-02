<?php
/**
 * FlexiPeeHP - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Adresář
 *
 * @link https://demo.flexibee.eu/c/demo/adresar/properties položky evidence
 */
class Adresar extends FlexiBeeRW
{
    use Stitky;
    
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'adresar';

    /**
     * get Email address for Customer with primary contact prefered
     * 
     * @return string email of primary contact or address email or null
     */
    public function getNotificationEmailAddress()
    {
        $email     = null;
        $emailsRaw = $this->getFlexiData($this->getApiURL(),
            ['detail' => 'custom:id,email,kontakty(primarni,email)', 'relations' => 'kontakty']);
        if (is_array($emailsRaw) && !empty($emailsRaw[0])) {
            $emails = $emailsRaw[0];
            if (array_key_exists('email', $emails) && strlen(trim($emails['email']))) {
                $email = $emails['email'];
            }
            if (array_key_exists('kontakty', $emails) && !empty($emails['kontakty'])) {
                foreach ($emails['kontakty'] as $kontakt) {
                    if (($kontakt['primarni'] == 'true') && strlen(trim($kontakt['email']))) {
                        $email = $kontakt['email'];
                        break;
                    }
                }
            }
        }
        return $email;
    }

    /**
     * get cell phone Number for Customer with primary contact prefered
     * 
     * @return string cell phone number of primary contact or address cell number or null
     */
    public function getCellPhoneNumber()
    {
        $mobil     = null;
        $mobilsRaw = $this->getFlexiData($this->getApiURL(),
            ['detail' => 'custom:id,mobil,kontakty(primarni,mobil)', 'relations' => 'kontakty']);
        if (is_array($mobilsRaw)) {
            $mobils = $mobilsRaw[0];
            if (array_key_exists('mobil', $mobils) && strlen(trim($mobils['mobil']))) {
                $mobil = $mobils['mobil'];
            }
            if (array_key_exists('kontakty', $mobils) && !empty($mobils['kontakty'])) {
                foreach ($mobils['kontakty'] as $kontakt) {
                    if (($kontakt['primarni'] == 'true') && strlen(trim($kontakt['mobil']))) {
                        $mobil = $kontakt['mobil'];
                        break;
                    }
                }
            }
        }
        return $mobil;
    }
    
    /**
     * get any phone Number for Customer with primary contact prefered
     * 
     * @return string phone number of primary contact or address's phone number or null
     */
    public function getAnyPhoneNumber()
    {
        $phoneNo    = null;
        $numbersRaw = $this->getFlexiData($this->getApiURL(),
            ['detail' => 'custom:id,mobil,tel,kontakty(primarni,mobil,tel)', 'relations' => 'kontakty']);
        if (is_array($numbersRaw) && !empty($numbersRaw[0])) {
            $numbers = $numbersRaw[0];
            if (array_key_exists('mobil', $numbers) && strlen(trim($numbers['mobil']))) {
                $phoneNo = $numbers['mobil'];
            }
            if (array_key_exists('tel', $numbers) && strlen(trim($numbers['tel']))) {
                $phoneNo = $numbers['tel'];
            }
            if (array_key_exists('kontakty', $numbers) && !empty($numbers['kontakty'])) {
                foreach ($numbers['kontakty'] as $kontakt) {
                    if ($kontakt['primarni'] == 'true') {
                        
                    }
                    if (strlen(trim($kontakt['mobil']))) {
                        $phoneNo = $kontakt['mobil'];
                        break;
                    } elseif (strlen(trim($kontakt['mobil']))) {
                        $phoneNo = $kontakt['mobil'];
                        break;
                    }
                }
            }
        }
        return $phoneNo;
    }
    
    
    /**
     * 
     * 
     * @param Adresar|string|int $address
     * 
     * @return array bank account details
     */
    public function getBankAccountNumber($address = null)
    {
        if (is_null($address)) {
            $address = $this->getMyKey();
        }
        $bucRaw = $this->getColumnsFromFlexibee(['buc', 'smerKod'], ['firma'=> $address ,'evidence' => 'adresar-bankovni-ucet']);
        return (!empty($bucRaw) && array_key_exists(0, $bucRaw)) ? $bucRaw : [];
    }
    
}
