#!/ur/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to use authentification
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$kontakter = new \FlexiPeeHP\Kontakt();

if ($kontakter->authenticate('login', 'heslo') === true) {
    $kontakter->addStatusMessage('User Authenticated', 'success');
} else {
    $kontakter->addStatusMessage('Auth not match', 'warning');
}
