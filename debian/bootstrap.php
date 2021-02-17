<?php

require_once '/var/lib/php-spojenet-abraflexi/autoload.php';

if (file_exists('/etc/abraflexi/client.json')) {
    \Ease\Shared::singleton()->loadConfig('/etc/abraflexi/client.json', true);
}
