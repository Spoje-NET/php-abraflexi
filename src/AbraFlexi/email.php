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
 * Add functions to use with "email" data column.
 *
 * Please use with:
 *
 * faktura-prijata
 * prodejka
 * doklad-k-uhrade
 * objednavka-prijata
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
 *
 * @no-named-arguments
 */
trait email
{
    /**
     * Get recipient for documnet.
     *
     * 1. try Document's "kontaktEmail" field
     * 2. try Document's company email
     * 3. try Document's primary contact mail
     * 4. try Document's any contact mail
     *
     * @return string - empty when no usable email address was found
     */
    public function getEmail(): string
    {
        if (empty($this->getDataValue('kontaktEmail'))) {
            $addresser = new Adresar($this->getDataValue('firma'), array_merge(['detail' => 'custom:email'], $this->getConnectionOptions()));

            if (empty($addresser->getDataValue('email'))) {
                $email = $addresser->getNotificationEmailAddress();
            } else {
                $email = $addresser->getDataValue('email');
            }
        } else {
            $email = $this->getDataValue('kontaktEmail');
        }

        return $email;
    }

    /**
     * Get recipients for documnet.
     *
     * 1. try Document's "kontaktEmail" field
     * 2. try Document's company email
     * 3. try Document's primary contact mail
     * 4. try Document's any contact mail
     * 5. try Document's contacts mail for given purpose
     *
     * @param string $purpose Purpose of Mail - one of Fak|Obj|Nab|Ppt|Skl|Pok or empty for autodetection
     *
     * @return string column divided list of email addresses
     */
    public function getRecipients(string $purpose = ''): string
    {
        $recipients = [];

        if (empty($this->getDataValue('kontaktEmail')) === false) {
            $recipients[] = $this->getDataValue('kontaktEmail');
        }

        if (empty($this->getDataValue('email')) === false) {
            $recipients[] = $this->getDataValue('email');
        }

        if (empty($this->getDataValue('firma')) === false) {
            $addresser = new Adresar($this->getDataValue('firma'), array_merge(['detail' => 'custom:email'], $this->getConnectionOptions()));
            $contacts = $addresser->getNotificationEmailAddress(empty($purpose) ? self::docTypeToPurpose($this) : $purpose);

            if (empty($contacts) === false) {
                if (strstr($contacts, ',') === false) {
                    $recipients[] = $contacts;
                } else {
                    $recipients = array_merge($recipients, explode(',', $contacts));
                }
            }
        }

        return implode(',', array_unique($recipients));
    }

    /**
     * Document type To Purpose.
     *
     * @param \AbraFlexi\RO $document
     *
     * @return string Contact role Fak|Obj|Nab|Ppt|Skl|Pok or ''
     */
    public static function docTypeToPurpose($document)
    {
        $purposeRaw = substr(str_replace('AbraFlexi\\', '', str_replace('Poptavka', 'Pptavka', $document::class)), 0, 3);

        return array_search($purposeRaw, ['Fak', 'Obj', 'Nab', 'Ppt', 'Skl', 'Pok'], true) === false ? '' : $purposeRaw;
    }
}
