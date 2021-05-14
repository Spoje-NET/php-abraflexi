<?php

/**
 * AbraFlexi - Read Only Access to AbraFlexi class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2021 Spoje.Net
 */

/**
 * Convert var_export to short array syntac
 * 
 * @param string $expression
 * 
 * @return string
 */
function varexport($expression) {
    $export = var_export($expression, TRUE);
    $patterns = [
        "/array \(/" => '[',
        "/^([ ]*)\)(,?)$/m" => '$1]$2',
        "/=>[ ]?\n[ ]+\[/" => '=> [',
        "/([ ]*)(\'[^\']+\') => ([\[\'])/" => '$1$2 => $3',
    ];
    $export = preg_replace(array_keys($patterns), array_values($patterns), $export);
    return $export;
}
