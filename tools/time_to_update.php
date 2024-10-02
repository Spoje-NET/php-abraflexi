<?php

namespace AbraFlexi;

require_once '../tests/bootstrap.php';

if ((new Status())->getDataValue('version') === \AbraFlexi\EvidenceList::$version) {
    echo 'false';
} else {
    echo 'true';
}
