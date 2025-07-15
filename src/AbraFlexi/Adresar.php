<?php

/**
 * AbraFlexi - Addressbook Item.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
 */

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
 * Adresář.
 *
 * @see https://demo.flexibee.eu/c/demo/adresar/properties položky evidence
 *
 * @no-named-arguments
 */
class Adresar extends RW implements Document
{
    use stitky;
    use subItems;
    use firma;
    use getChanges;
    use kod;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'adresar';

    /**
     * get Email address for Customer with primary contact prefered.
     *
     * @param string $purpose Purpose - one of Fak|Obj|Nab|Ppt|Skl|Pok
     *
     * @return null|string email of primary contact or address email or empty string
     */
    public function getNotificationEmailAddress(string $purpose = ''): string
    {
        $email = '';
        $emailsRaw = $this->getFlexiData(
            $this->getApiURL(),
            ['detail' => 'custom:id,email,kontakty(primarni,email,odesilatFak,odesilatObj,odesilatNab,odesilatPpt,odesilatSkl,odesilatPok)', 'relations' => 'kontakty'],
        );

        if (\is_array($emailsRaw) && !empty($emailsRaw[0])) {
            $emails = $emailsRaw[0];

            if (\array_key_exists('email', $emails) && \strlen(trim($emails['email']))) {
                $email = $emails['email'];
            }

            if (\array_key_exists('kontakty', $emails) && !empty($emails['kontakty'])) {
                $candidates = [];

                foreach ($emails['kontakty'] as $kontakt) {
                    if (\strlen($purpose)) {
                        if ($kontakt['odesilat'.ucfirst($purpose)] === 'true') {
                            $candidates[] = $kontakt['email'];
                        }
                    } else {
                        if (\array_key_exists('primarni', $kontakt) && ($kontakt['primarni'] === 'true') && \strlen(trim($kontakt['email']))) {
                            $candidates[] = $kontakt['email'];

                            break;
                        }
                    }
                }

                if (\count($candidates)) {
                    $email = implode(',', array_unique($candidates));
                }
            }
        }

        return $email;
    }

    /**
     * get cell phone Number for Customer with primary contact prefered.
     *
     * @param string $purpose Purpose - one of Fak|Obj|Nab|Ppt|Skl|Pok
     *
     * @return string cell phone number of primary contact or address cell number or null
     */
    public function getCellPhoneNumber(string $purpose = '')
    {
        $mobil = null;
        $mobilsRaw = $this->getFlexiData(
            $this->getApiURL(),
            ['detail' => 'custom:id,mobil,kontakty(primarni,mobil,odesilatFak,odesilatObj,odesilatNab,odesilatPpt,odesilatSkl,odesilatPok)', 'relations' => 'kontakty'],
        );

        if (\is_array($mobilsRaw)) {
            $mobils = $mobilsRaw[0];

            if (\array_key_exists('mobil', $mobils) && \strlen(trim($mobils['mobil']))) {
                $mobil = $mobils['mobil'];
            }

            if (\array_key_exists('kontakty', $mobils) && !empty($mobils['kontakty'])) {
                $candidates = [];

                foreach ($mobils['kontakty'] as $kontakt) {
                    if (\strlen($purpose)) {
                        if ($kontakt['odesilat'.ucfirst($purpose)] === 'true') {
                            $candidates[] = $kontakt['mobil'];
                        }
                    } else {
                        if (\array_key_exists('primarni', $kontakt) && ($kontakt['primarni'] === 'true') && \strlen(trim($kontakt['mobil']))) {
                            $candidates = $kontakt['mobil'];

                            break;
                        }
                    }
                }

                if (\count($candidates)) {
                    $mobil = implode(',', array_unique($candidates));
                }
            }
        }

        return $mobil;
    }

    /**
     * get any phone Number for Customer with primary contact prefered.
     *
     * @param string $purpose Purpose - one of Fak|Obj|Nab|Ppt|Skl|Pok
     *
     * @return string phone number of primary contact or address's phone number or null
     */
    public function getAnyPhoneNumber(string $purpose = '')
    {
        $phoneNo = null;
        $numbersRaw = $this->getFlexiData(
            $this->getApiURL(),
            ['detail' => 'custom:id,mobil,tel,kontakty(primarni,mobil,tel,odesilatFak,odesilatObj,odesilatNab,odesilatPpt,odesilatSkl,odesilatPok)', 'relations' => 'kontakty'],
        );

        if (\is_array($numbersRaw) && !empty($numbersRaw[0])) {
            $numbers = $numbersRaw[0];

            if (\array_key_exists('mobil', $numbers) && \strlen(trim($numbers['mobil']))) {
                $phoneNo = $numbers['mobil'];
            }

            if (\array_key_exists('tel', $numbers) && \strlen(trim($numbers['tel']))) {
                $phoneNo = $numbers['tel'];
            }

            if (\array_key_exists('kontakty', $numbers) && !empty($numbers['kontakty'])) {
                // Try to use primary contact if present
                foreach ($numbers['kontakty'] as $kontakt) {
                    if ($kontakt['primarni'] === 'true') {
                        if (\strlen(trim($kontakt['mobil']))) {
                            $phoneNo = $kontakt['mobil'];

                            break;
                        }
                    }
                }

                // Use first contact if no primary is set
                if (null === $phoneNo) {
                    foreach ($numbers['kontakty'] as $kontakt) {
                        if (\strlen(trim($kontakt['mobil']))) {
                            $phoneNo = $kontakt['mobil'];

                            break;
                        }
                    }
                }
            }
        }

        return $phoneNo;
    }

    /**
     * Obtain Bank number.
     *
     * @param Adresar|int|string $address
     *
     * @return array<string, string> bank account details
     */
    public function getBankAccountNumber($address = null)
    {
        if (null === $address) {
            $address = $this->getMyKey();
        }

        $bucRaw = $this->getColumnsFromAbraFlexi(['buc', 'smerKod'], ['firma' => $address, 'evidence' => 'adresar-bankovni-ucet']);

        return (!empty($bucRaw) && \array_key_exists(0, $bucRaw)) ? $bucRaw : [];
    }

    #[\Override]
    public function getEmail(): string
    {
        return $this->getNotificationEmailAddress();
    }

    /**
     * Get AddressBook Item ID.
     *
     * @return array<string, string>
     */
    #[\Override]
    public function getSumFromAbraFlexi($conditions = []): array
    {
        return [];
    }
}
