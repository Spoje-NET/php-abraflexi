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

/**
 * Ask For Invoice ID.
 *
 * @param string $type Requested type for documents
 *
 * @return int|string id or code
 */
function askForFlexiBeeID($type = 'invoice')
{
    $invoiceID = null;
    echo "Please enter {$type} ID:";
    $input = fopen('php://stdin', 'rb');
    $invoiceID = trim(fgets($input));
    fclose($input);

    if (is_numeric($invoiceID)) {
        $invoiceID = (int) $invoiceID;
    }

    return $invoiceID;
}
