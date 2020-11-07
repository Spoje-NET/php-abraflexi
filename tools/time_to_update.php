<?php

namespace AbraFlexi;

require_once '../testing/bootstrap.php';

$statuser = new Status();
if ($statuser->getDataValue('version') === \AbraFlexi\EvidenceList::$version) {
    echo 'false';
} else {
    echo 'true';
}
