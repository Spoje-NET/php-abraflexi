#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to move product between categories using external IDs only
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$products_id = 2345;
$old_category_id = 23;
$new_category_id = 22;

$sokoban   = new \FlexiPeeHP\StromCenik();
$pricelist = new \FlexiPeeHP\Cenik('ext:products:'.$products_id, ['detail' => 'id']);
$sokoban->deleteFromFlexiBee('ext:ptc:'.$old_category_id);
$sokoban->insertToFlexiBee(['id'=>'ext:ptc:'.$new_category_id,'idZaznamu' => $pricelist->getRecordID(), 'uzel' => 'ext:categories:'.$new_category_id]);
