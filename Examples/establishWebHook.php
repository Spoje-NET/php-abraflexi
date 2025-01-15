#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include_once './config.php';

include_once '../vendor/autoload.php';

/**
 * Returns the current URL. This is instead of PHP_SELF which is unsafe.
 *
 * @param bool $dropqs whether to drop the querystring or not. Default true
 *
 * @return string the current URL or NULL for php-cli
 */
function phpSelf($dropqs = true)
{
    $url = null;

    if (\PHP_SAPI !== 'cli') {
        $schema = 'http';

        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on')) {
            $schema .= 's';
        }

        $url = sprintf(
            '%s://%s%s',
            $schema,
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI'],
        );

        $parts = parse_url($url);

        $port = $_SERVER['SERVER_PORT'];
        $scheme = $parts['scheme'];
        $host = $parts['host'];

        if (isset($parts['path'])) {
            $path = $parts['path'];
        } else {
            $path = null;
        }

        if (isset($parts['query'])) {
            $qs = $parts['query'];
        } else {
            $qs = null;
        }

        $port || $port = ($scheme === 'https') ? '443' : '80';

        if (($scheme === 'https' && $port !== '443') || ($scheme === 'http' && $port !== '80')
        ) {
            $host = "{$host}:{$port}";
        }

        $url = "{$scheme}://{$host}{$path}";

        if (!$dropqs) {
            $url = "{$url}?{$qs}";
        }
    }

    return $url;
}

$hooks = new \AbraFlexi\Hooks();
$hooks->debug = true;
$hooks->throwException = true;
$hooks->register(str_replace(basename(__FILE__), 'webhook.php', phpSelf()));
