<?php

namespace AbraFlexi;

require_once '../test/bootstrap.php';

$statuser = new Status();
echo $statuser->getDataValue('version');
