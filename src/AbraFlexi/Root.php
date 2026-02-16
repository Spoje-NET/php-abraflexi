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
 * Description of Common.
 *
 * @author vitex
 *
 * @no-named-arguments
 */
class Root extends RW
{
    /**
     * Update HTTPS certificate.
     */
    public function uploadCertificate(string $pem): bool
    {
        $this->postFields = $pem;
        $this->performRequest('/certificate', 'PUT');

        return $this->lastResponseCode === 201;
    }

    /**
     * Server Status data.
     *
     * @return array<string, string>
     */
    public function getStatus(): array
    {
        $statusRaw = $this->performRequest('/status.json', 'GET');

        return $statusRaw['status'];
    }

    /**
     * Server License data.
     *
     * @return array<string, string>
     */
    public function getLicenseInfo(): array
    {
        $statusRaw = $this->performRequest('/license.json', 'GET');

        return $statusRaw['license'];
    }

    /**
     * Get available companies listing.
     *
     * @param array<string, mixed> $conditions applay to listing
     *
     * @return null|array<string, mixed> of companies available
     */
    public function companies(array $conditions = []): ?array
    {
        return $this->getFlexiData('/c', $conditions);
    }
}
