<?php

namespace AbraFlexi;

require_once '../test/bootstrap.php';

if ((new Status())->getDataValue('version') === \AbraFlexi\EvidenceList::$version) {
    echo 'false';
} else {
    echo 'true';
}
