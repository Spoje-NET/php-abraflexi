#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to set up authentification
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$kontakter = new \FlexiPeeHP\Kontakt();
$first     = $kontakter->getColumnsFromFlexibee(['id'], ['limit' => 1]);
$kontakter->setData([
    'id' => $first[0]['id'],
    'username' => 'login',
    'password' => 'heslo',
//    'password@hash' => 'sha256',
//    'password@salt' => 'osoleno',
    'email' => 'example@flexibee.eu',
    'poznam' => 'auth']);

$kontakter->insertToFlexiBee();

if ($kontakter->lastResponseCode == 201) {
    $kontakter->addStatusMessage('Password set', 'success');
    $kontakter->loadFromFlexiBee();
} else {
    $kontakter->addStatusMessage('Password set failed', 'warning');
}
