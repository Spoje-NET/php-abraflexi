<?php

/**
 * AbraFlexi - Document Email support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2019 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add functions to use with "email" data column
 *
 * Please use with:
 *
 * faktura-prijata
 * prodejka
 * doklad-k-uhrade
 * objednavka-vydana
 * vzajemny-zapocet
 * banka
 * pokladni-pohyb
 * faktura-vydana
 * skladovy-pohyb
 * pohledavka
 * zavazek
 * nabidka-prijata
 * poptavka-vydana
 * nabidka-vydana
 * poptavka-prijata
 * interni-doklad
 * objednavka-prijata
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait email {

    /**
     * Get recipient for documnet.
     *
     * 1. try Document's "kontaktEmail" field
     * 2. try Document's company email
     * 3. try Document's primary contact mail
     * 4. try Document's any contact mail
     *
     * @param string $purpose Purpose of Mail - one of Fak|Obj|Nab|Ppt|Skl|Pok
     *
     * @return string
     */
    public function getEmail(string $purpose = '') {
        if (empty($this->getDataValue('kontaktEmail'))) {
            $addresser = new Adresar($this->getDataValue('firma'), array_merge(['detail' => 'custom:email'], $this->getConnectionOptions()));
            if (empty($addresser->getDataValue('email'))) {
                $email = $addresser->getNotificationEmailAddress($purpose);
            } else {
                $email = $addresser->getDataValue('email');
            }
        } else {
            $email = $this->getDataValue('kontaktEmail');
        }

        return $email;
    }

    /**
     * Document type To Purpose
     *
     * @param \AbraFlexi\RO $document
     *
     * @return string Contact role Fak|Obj|Nab|Ppt|Skl|Pok or ''
     */
    public static function docTypeToPurpose($document) {
        $purposeRaw = substr(str_replace('AbraFlexi\\', '', get_class($document)), 0, 2);
        return array_search($purposeRaw, ['Fak','Obj','Nab','Ppt','Skl','Pok']) === false ? '' : $purposeRaw ; 
    }
}
