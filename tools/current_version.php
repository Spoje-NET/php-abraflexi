<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

$statuser = new Status();
echo $statuser->getDataValue('version');
