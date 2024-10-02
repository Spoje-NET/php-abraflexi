<?php

namespace AbraFlexi;

require_once '../tests/bootstrap.php';

$statuser = new Status();
echo $statuser->getDataValue('version');
