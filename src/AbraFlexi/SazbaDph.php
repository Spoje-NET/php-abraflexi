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
 * @no-named-arguments
 */
class SazbaDph extends RW
{
    public ?string $evidence = 'sazba-dph';

    /**
     * Returns the current active VAT rate for today.
     *
     * This method queries the 'sazba-dph' evidence for an active rate
     * where the current date is between 'platnostOd' and 'platnostDo'.
     *
     * @throws \RuntimeException if the evidence query fails
     *
     * @return null|float the current VAT rate percentage, or null if not found
     */
    public function getCurrent(): ?float
    {
        $today = date('Y-m-d');
        $queryParams = [
            'platiOdData' => 'lte '.$today,
            'platiDoData' => 'gte '.$today,
            'aktivni' => 1, // Only active VAT rates
            'limit' => 1,
        ];

        try {
            $result = $this->getColumnsFromAbraFlexi(['szbDph'], $queryParams);

            if (isset($result[0]['szbDph'])) {
                return (float) $result[0]['szbDph'];
            }
        } catch (\Exception $exception) {
            throw new \RuntimeException(
                _('Failed to fetch current VAT rate: ').$exception->getMessage(),
                0,
                $exception,
            );
        }

        return null;
    }
}
