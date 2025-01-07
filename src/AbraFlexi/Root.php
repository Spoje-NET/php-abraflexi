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
 * Description of Common.
 *
 * @author vitex
 */
class Root extends RW
{
    /**
     * Update HTTPS certificate.
     *
     * @param string $pem
     *
     * @return bool
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
