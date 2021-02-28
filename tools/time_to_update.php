<?php

namespace AbraFlexi;

require_once '../testing/bootstrap.php';

if ((new Status())->getDataValue('version') === \AbraFlexi\EvidenceList::$version) {
    echo 'false';
} else {
    echo 'true';
}
