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
     *
     * @param string $pem
     */
    public function uploadCertificate($pem): bool
    {
        $this->postFields = $pem;
        $this->performRequest('/certificate', 'PUT');

        return $this->lastResponseCode === 201;
    }

    /**
     * Get available companies listing.
     *
     * @param array $conditions applay to listing
     *
     * @return array
     */
    public function companies($conditions = [])
    {
        return $this->getFlexiData('/c', $conditions);
    }
}
