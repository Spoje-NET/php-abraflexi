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
 * Pokladna.
 *
 * @see https://demo.flexibee.eu/c/demo/pokladna/properties
 */
class Pokladna extends RW
{
    use stitky;
    use getChanges;
    use kod;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'pokladna';

    /**
     * Add Data to invoice subItem.
     *
     * @see Relations
     *
     * @param array  $data         pole dat
     * @param string $relationPath path evidence (relation) pro vkládaná data
     * @param bool   $removeAll
     *
     * @return bool Operation success
     */
    public function addArrayToBranch(
        $data,
        $relationPath = 'polozkyIntDokladu',
        $removeAll = false
    ) {
        return parent::addArrayToBranch($data, $relationPath, $removeAll);
    }
}
