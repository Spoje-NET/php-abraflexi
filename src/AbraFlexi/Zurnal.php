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
 * Žurnál změn
 * Journal of Changes.
 *
 * @see https://demo.flexibee.eu/c/demo/adresar/properties položky evidence
 */
class Zurnal extends RO
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'zurnal';
    public static array $evidenceToDb = ['faktura-vydana' => 'ddoklfak'];

    /**
     * Class for read only interaction with AbraFlexi.
     *
     * @param mixed $init    default record id or initial data
     * @param array $options Connection settings and other options override
     */
    public function __construct($init = null, $options = [])
    {
        parent::__construct($init, $options);

        foreach (EvidenceList::$evidences as $evidenceName => $evidenceProperties) {
            if (\array_key_exists('dbName', $evidenceProperties)) {
                self::$evidenceToDb[$evidenceName] = $evidenceProperties['dbName'];
            }
        }
    }

    /**
     * obtain all record changes array.
     *
     * Note: Do not use this method in production environment!
     *
     *       If you have no other choice pleas add indexes into wzurnal
     *       postgesql table:
     *
     *       CREATE INDEX CONCURRENTLY tname_index ON wzurnal (tabulka);
     *       CREATE INDEX CONCURRENTLY rid_index ON wzurnal (idZaznamu);
     *
     * @param RO $object
     *
     * @return array changes history
     */
    public function getAllChanges($object)
    {
        $changesArray = [];

        $evidence = $object->getEvidence();

        if (\array_key_exists($evidence, self::$evidenceToDb)) {
            $dbTable = self::$evidenceToDb[$evidence];
            $changes = $this->getColumnsFromAbraFlexi(
                '*',
                ['tabulka' => $dbTable, 'idZaznamu' => $object->getMyKey()],
            );

            foreach ($changes as $change) {
                $changesArray[$change['datCas']][$change['sloupec']] = $change;
            }
        }

        return $changesArray;
    }

    /**
     * obtain last change array.
     *
     * @param RO $object
     *
     * @return array Old/New values pairs
     */
    public function getLastChange($object)
    {
        $lastChange = null;
        $allChanges = $this->getAllChanges($object);

        if (\count($allChanges)) {
            $lastChange = end($allChanges);
        }

        return $lastChange;
    }
}
