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
 * Štítek.
 *
 * @see https://demo.flexibee.eu/c/demo/stitek/properties Vlastnosti evidence
 *
 * @no-named-arguments
 */
class Stitek extends RW
{
    /**
     * Evidence Path for vsb supported by label.
     * @var array<string,string>
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
     * Convert coma-separated list to array.
     *
     * @param array<mixed>|string $listRaw
     * @return array<mixed>
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
     * @return array<mixed>
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
     * Create New Label for given evidences.
     *
     * @param string $name      Label Name
     * @param array<mixed>  $evidences Evidence code list ex: ['faktura-vydana','faktura-prijata']
     * @param array<mixed>  $options   Additional Label properties ex: ['kod'=>'EXAMPLE','skupVybKlic'=>'SKUPINA_STITKU']
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
            $this->setDataValue('kod', \AbraFlexi\Functions::code($name));
        }

        $this->setDataValue('nazev', $name);

        return $this->sync();
    }
}
