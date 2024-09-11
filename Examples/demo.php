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

require_once '../test/bootstrap.php';

echo _('FlexiBee Connection Test')."\n\n";

$statuser = new Status();

echo $statuser->getApiURL()."\n\n";

foreach ($statuser->getData() as $property => $value) {
    echo "{$property}: {$value}\n";
}

$company = new Company();
$info = $company->getAllFromFlexibee();

if (isset($info) && \count($info)) {
    foreach ($info as $companyInfo) {
        echo \constant('FLEXIBEE_URL').'/c/'.$companyInfo['dbNazev'], $companyInfo['nazev']."\n";
    }
} else {
    echo \constant('FLEXIBEE_URL').' '._('Communication error')."\n";
}

$changer = new Changes();
$changer->enable();

if ($changer->getStatus()) {
    echo _('ChangesAPI enabled');
} else {
    echo _('ChangesAPI disabled');
}
