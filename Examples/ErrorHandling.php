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

namespace Example\AbraFlexi;

use AbraFlexi\FakturaVydana;

\define('EASE_LOGGER', 'syslog|console');

include_once './config.php';

include_once '../vendor/autoload.php';

$invoicer = new FakturaVydana(['typDokl' => 'FAKTURA']); // "code:" is missing

if ($invoicer->sync() === false) {
    $invoicer->lastResponseCode;  // (int) 400
    $invoicer->lastCurlError;     // empty in this case
    $invoicer->lastCurlResponse;  // {"winstrom":{"@version":"1.0","success":"false","stats":{"created":"0","updated":"0","deleted":"0","skipped":"0","failed":"1"},"results":[{"errors":[{"message":"Je očekáváno číselné ID, ale 'FAKTURA' není číslo","for":"typDokl","path":"faktura-vydana[temporary-id=null].typDokl","value":"FAKTURA","code":"PROP"}]}]}}
    $invoicer->getErrors();       // array(1) (
    //           [0] => array(5) (
    //               [message] => (string) Je očekáváno číselné ID, ale 'FAKTURA' není číslo
    //               [for] => (string) typDokl
    //               [path] => (string) faktura-vydana[temporary-id=null].typDokl
    //               [value] => (string) FAKTURA
    //               [code] => (string) PROP
    //          )
    //         )
}

/*
 * EASE_LOGGER: "console" print red/yellow lines:

  php -f Examples/ErrorHandling.php
  03/21/20 03:29:47 ``  ☠ Je očekáváno číselné ID, ale 'FAKTURA' není číslo
  03/21/20 03:29:47 ``  ⚠ 400: https://vitexsoftware.flexibee.eu:5434/c/flexipeehp/faktura-vydana
  03/21/20 03:29:47 ``  ☠ : Je očekáváno číselné ID, ale 'FAKTURA' není číslo for: typDokl value:FAKTURA code:PROP
  03/21/20 03:29:47 ``  ⚙ {"for":"typDokl","path":"faktura-vydana[temporary-id=null].typDokl","value":"FAKTURA","code":"PROP"}
  03/21/20 03:29:47 ``  ⚠ Error 400: https://vitexsoftware.flexibee.eu:5434/c/flexipeehp/faktura-vydana
  Done.
 */

/*
 * EASE_LOGGER "syslog" add this to /var/log/syslog

  Mar 21 03:29:47 exiv AbraFlexitest: ` `  400: https://vitexsoftware.flexibee.eu:5434/c/flexipeehp/faktura-vydana
  Mar 21 03:29:47 exiv AbraFlexitest:
  Mar 21 03:29:47 exiv AbraFlexitest: ` `  Je očekáváno číselné ID, ale 'FAKTURA' není číslo
  Mar 21 03:29:47 exiv AbraFlexitest:
  Mar 21 03:29:47 exiv AbraFlexitest: ` ` @@ {"for":"typDokl","path":"faktura-vydana[temporary-id=null].typDokl","value":"FAKTURA","code":"PROP"}
  Mar 21 03:29:47 exiv AbraFlexitest:
  Mar 21 03:29:47 exiv AbraFlexitest: ` `  Error 400: https://vitexsoftware.flexibee.eu:5434/c/flexipeehp/faktura-vydana
  Mar 21 03:29:47 exiv AbraFlexitest:
  Mar 21 03:29:47 exiv AbraFlexitest: ` `  : Je očekáváno číselné ID, ale 'FAKTURA' není číslo for: typDokl value:FAKTURA code:PROP
  Mar 21 03:29:47 exiv AbraFlexitest:

 */

$invoicer = new FakturaVydana(['typDokl' => 'FAKTURA'], ['throwException' => true]); // "code:" is missing
// Or define('FLEXIBEE_EXCEPTIONS',true);

try {
    $invoicer->sync();
} catch (\Ease\Exception $exc) {
    echo $exc->getCode().': '.$exc->getMessage();
}
