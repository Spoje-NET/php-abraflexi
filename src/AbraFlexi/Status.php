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
 * Description of Status.
 *
 * @author vitex
 */
class Status extends RO
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object.
     *
     * @see https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
     */
    public ?string $evidence = 'status';

    /**
     * @see https://demo.flexibee.eu/devdoc/company-identifier Identifikátor firmy
     */
    public ?string $company = '';

    /**
     * Default Line Prefix.
     */
    public string $prefix = '';

    /**
     * AbraFlexi status.
     *
     * @param mixed $init    mostly ignored
     * @param array $options not used at all
     */
    public function __construct($init = null, $options = [])
    {
        parent::__construct($init, $options);
        $this->takeData($this->getFlexiData('/'.$this->evidence));
    }

    /**
     * Return the same response format for one and multiplete results.
     *
     * @param array $responseRaw
     */
    public function unifyResponseFormat($responseRaw): array
    {
        if (\array_key_exists('status', $responseRaw)) {
            $response = $responseRaw['status'];
        } else {
            $response = $responseRaw;
        }

        return $response;
    }

    /**
     * Status has no relations.
     *
     * @param null|mixed $id
     */
    public function getVazby($id = null): void
    {
        throw new \Exception(_('Status has no relations'));
    }
}
