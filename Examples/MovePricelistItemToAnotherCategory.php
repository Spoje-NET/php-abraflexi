#!/usr/bin/php -f
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

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$products_id = 2345;
$old_category_id = 23;
$new_category_id = 22;

$sokoban = new \AbraFlexi\StromCenik();
$pricelist = new \AbraFlexi\Cenik('ext:products:'.$products_id, ['detail' => 'id']);
$sokoban->deleteFromFlexiBee('ext:ptc:'.$old_category_id);
$sokoban->insertToFlexiBee(['id' => 'ext:ptc:'.$new_category_id, 'idZaznamu' => $pricelist->getRecordID(), 'uzel' => 'ext:categories:'.$new_category_id]);
