<?php

namespace AbraFlexi;

define('EASE_LOGGER', 'console|syslog');

require_once '../tests/bootstrap.php';

$engine = new RO();
$engine->logBanner('AbraFlexi Structure Static Generator');

