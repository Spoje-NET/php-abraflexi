#!/ur/bin/php -f
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

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$kontakter = new \AbraFlexi\Kontakt();

if ($kontakter->authenticate('login', 'heslo') === true) {
    $kontakter->addStatusMessage('User Authenticated', 'success');
} else {
    $kontakter->addStatusMessage('Auth not match', 'warning');
}
