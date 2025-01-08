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
 * Log změn v evidencích.
 *
 * @see https://www.abraflexi.eu/api/dokumentace/ref/changes-api/ Dokumentace
 */
class Changes extends RO
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'changes';

    /**
     * Povolí oznamování změn
     * Allow changes notification.
     *
     * @return bool
     */
    public function enable(): bool
    {
        $this->performRequest('enable.xml', 'POST', 'xml');

        return $this->lastResponseCode === 200;
    }

    /**
     * Zakáže oznamování změn
     * Disallow changes notification.
     *
     * @return bool
     */
    public function disable(): bool
    {
        $this->performRequest('disable.xml', 'POST', 'xml');

        return $this->lastResponseCode === 200;
    }

    /**
     * Vrátí stav zapnutí ChangesAPI.
     */
    public function getStatus(): bool
    {
        $status = $this->performRequest('status.xml', 'GET', 'xml');

        return ($this->lastResponseCode === 200) && ($status['changes'][0]['success'] === 'true');
    }

    /**
     * Test if given record exists in AbraFlexi .
     *
     * @param array $data
     *
     * @return bool Method is disabled for Changes
     */
    public function recordExists($data): bool
    {
        return false;
    }

    /**
     * Obtain actual GlobalVersion
     * Vrací aktuální globální verzi změn.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/changes-api#globalVersion Globální Verze
     *
     * @return int
     */
    public function getGlobalVersion()
    {
        $this->getColumnsFromAbraFlexi('id', ['start' => 0, 'limit' => 0]);

        return $this->globalVersion;
    }

    /**
     * Convert AbraFlexi Response XML to Array.
     *
     * @param string $rawXML
     *
     * @return array<mixed>
     */
    public function rawXmlToArray($rawXML): array
    {
        return [$this->getEvidence() => parent::rawXmlToArray($rawXML)];
    }

    /**
     * Changes has no relations.
     *
     * @param null|mixed $id
     */
    public function getVazby($id = null): void
    {
        throw new Exception(_('Changes has no relations'), $this);
    }
}
