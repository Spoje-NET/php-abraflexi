<?php

declare(strict_types=1);

/**
 * Print the current online version from AbraFlexi Status.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright (C) 2025 Spoje.Net
 */

namespace AbraFlexi;

require_once __DIR__ . '/../tests/bootstrap.php';

try {
    $status = new Status();
    $version = $status->getDataValue('version');
    echo $version;
} catch (\Throwable $exception) {
    // Print a meaningful error message
    echo 'Error: ' . $exception->getMessage();
}
