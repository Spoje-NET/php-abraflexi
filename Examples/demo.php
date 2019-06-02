<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

echo _('FlexiBee Connection Test')."\n\n";

$statuser = new Status();

echo $statuser->getApiURL()."\n\n";

foreach ($statuser->getData() as $property => $value) {
    echo "$property: $value\n";
}

$company = new Company();
$info    = $company->getAllFromFlexibee();

if (isset($info) && count($info)) {
    foreach ($info as $companyInfo) {
        echo constant('FLEXIBEE_URL').'/c/'.$companyInfo['dbNazev'],$companyInfo['nazev']."\n";
    }
} else {
    echo constant('FLEXIBEE_URL') . ' ' . _('Communication error')."\n";
}

$changer = new Changes();
$changer->enable();

if ($changer->getStatus()) {
    $changer->addStatusMessage(_('ChangesApi Povoleno'));
    $container->addItem(new \Ease\TWB\Label('success', _('ChangesAPI povoleno')));
} else {
    $container->addItem(new \Ease\TWB\Label('warning', _('ChangesAPI zakázáno')));
}

