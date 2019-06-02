<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

$statuser = new Status();
if ($statuser->getDataValue('version') === \FlexiPeeHP\EvidenceList::$version) {
    echo 'false';
} else {
    echo 'true';
}
