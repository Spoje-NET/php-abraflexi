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

namespace Test;

/**
 * Class used to test Object To Array Conversion.
 */
class ObjectForTesting extends \stdClass
{
    /**
     * Simple Item.
     */
    public int $item = 1;

    /**
     * Array item.
     *
     * @var array<string>
     */
    public array $arrItem = ['a', 'b' => 'c'];

    /**
     * Simple method.
     *
     * @return bool
     */
    public function method()
    {
        return true;
    }
}
