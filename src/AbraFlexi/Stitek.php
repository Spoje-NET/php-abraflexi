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
 * Štítek.
 *
 * @see https://demo.flexibee.eu/c/demo/stitek/properties Vlastnosti evidence
 */
class Stitek extends RW
{
    /**
     * Evidence Path for vsb supported by label.
     */
    public static array $vsbToEvidencePath = [
        'vsbAdr' => 'adresar', // Adresář
        'vsbBan' => 'banka', // Banka
        //      'vsbCis' => 'ciselnik', // Číselníky
        'vsbFap' => 'faktura-prijata', // Přijaté faktury
        'vsbFav' => 'faktura-vydana', // Vydané faktury
        //      'vsbInt' => '' // Interní doklady
        'vsbKatalog' => 'cenik', // Adresář
        //      'vsbMaj' => '', // Majetek
        //      'vsbMzd' => 'mzda', // Mzdy
        'vsbNap' => 'nabidka-prijata', // Nabídky přijaté
        'vsbNav' => 'nabidka-vydana', // Nabídky vydané
        'vsbObp' => 'objednavka-prijata', // Objednávky přijaté
        'vsbObv' => 'objednavka-vydana', // Objednávky vydané
        'vsbPhl' => 'pohledavka', // Pohledávky
        'vsbPok' => 'pokladna', // Pokladna
        'vsbPpp' => 'poptavka-prijata', // Poptávky přijaté
        'vsbPpv' => 'poptavka-vydana', // Poptávky vydané
        'vsbSkl' => 'sklad', // Sklad
        'vsbZav' => 'zavazek', // Závazky
    ];

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'stitek';

    /**
     * Obtain labels for current record.
     *
     * @deprecated since version 1.21
     *
     * @param RO $object data source
     *
     * @return array labels
     */
    public static function getLabels($object)
    {
        $labels = null;
        $labelsRaw = $object->getDataValue('stitky');

        if (\strlen($labelsRaw)) {
            $labels = \is_array($labelsRaw) ? $labelsRaw : self::listToArray($labelsRaw);
        }

        return $labels;
    }

    /**
     * Convert coma-separated list to array.
     *
     * @param array|string $listRaw
     */
    public static function listToArray($listRaw): array
    {
        if (\is_array($listRaw)) {
            $list = array_combine(array_values($listRaw), array_values($listRaw));
        } else {
            if (strstr($listRaw, ',')) {
                $list = array_map('trim', explode(',', $listRaw));
            } else {
                $list = [$listRaw];
            }

            $list = array_combine($list, $list);
        }

        return empty($listRaw) ? [] : $list;
    }

    /**
     * Obtain list of available labels for given object.
     *
     * @param RO $object
     *
     * @return array
     */
    public static function getAvailableLabels($object)
    {
        $labels = [];
        $evidenceBackup = $object->getEvidence();
        $object->setEvidence('stitek');
        $pathToVsb = array_flip(self::$vsbToEvidencePath);

        if (\array_key_exists($evidenceBackup, $pathToVsb)) {
            $labelsRaw = $object->getColumnsFromAbraFlexi(
                ['kod', 'nazev'],
                [$pathToVsb[$evidenceBackup] => true, 'limit' => 0],
                'nazev',
            );

            if (\count($labelsRaw)) {
                foreach ($labelsRaw as $labelInfo) {
                    $labels[$labelInfo['kod']] = $labelInfo['nazev'];
                }
            }
        }

        $object->setEvidence($evidenceBackup);

        return $labels;
    }

    /**
     * Set Label for Current Object record.
     *
     * @deprecated since version 1.21
     *
     * @param string $label
     * @param RW     $object
     *
     * @return bool success result ?
     */
    public static function setLabel($label, $object)
    {
        return (bool) $object->insertToAbraFlexi(['id' => $object->getMyKey(), 'stitky' => $label]);
    }

    /**
     * UnSet Label for Current Object record.
     *
     * @deprecated since version 1.21
     *
     * @param string $label
     * @param RW     $object
     *
     * @return bool success result ?
     */
    public static function unsetLabel($label, $object)
    {
        $result = true;
        $labels = self::getLabels($object);

        if (\array_key_exists($label, $labels)) {
            unset($labels[$label]);
            $object->insertToAbraFlexi(['id' => $object->getMyKey(), 'stitky@removeAll' => 'true',
                'stitky' => $labels]);
            $result = ($object->lastResponseCode === 201);
        }

        return $result;
    }

    /**
     * Create New Label for given evidencies.
     *
     * @param string $name      Label Name
     * @param array  $evidences Evidence code list ex: ['faktura-vydana','faktura-prijata']
     * @param array  $options   Additional Label properties ex: ['kod'=>'EXAMPLE','skupVybKlic'=>'SKUPINA_STITKU']
     *
     * @return bool success
     */
    public function createNew($name, $evidences, $options = []): bool
    {
        $this->setData($options, true);
        $evidence2code = array_flip(self::$vsbToEvidencePath);

        foreach ($evidences as $evidence) {
            if (\array_key_exists($evidence, $evidence2code)) {
                $this->setDataValue($evidence2code[$evidence], true);
            }
        }

        if (!\array_key_exists('kod', $options)) {
            $this->setDataValue('kod', self::code($name));
        }

        $this->setDataValue('nazev', $name);

        return $this->sync();
    }
}
