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

include_once './config.php';

include_once '../vendor/autoload.php';

\define('EASE_APPNAME', 'ReportUploader');
\define('EASE_LOGGER', 'syslog|console');

if ($argc < 3) {
    echo 'usage: '.$argv[0]." <recordIdent> <formInfoCode> <reportfile> \n";
    echo 'example: '.$argv[0]."  code:PokladDen pokDenik WinstromReports/vykazAnalyzaZakazky/analyzaZakazky.jrxml \n";
} else {
    $reportID = $argv[1];

    if ($argc === 3) {
        if (is_file($argv[2])) {
            $reportFile = $argv[2];
        } else {
            $formCode = $argv[2];
            $reportFile = $argv[3];
        }
    }

    if (strstr($reportFile, '.jrxml')) {
        system('jaspercompiler '.$reportFile); // https://github.com/VitexSoftware/jaspercompiler
        $reportFile = str_replace('.jrxml', '.jasper', $reportFile);
    }

    if (file_exists($reportFile)) {
        $reporter = new \AbraFlexi\Report($reportID);
        $oldReportId = (int) $reporter->getDataValue('hlavniReport');
        $attachment = \AbraFlexi\Priloha::addAttachmentFromFile($reporter, $reportFile);

        if ($reporter->sync(['hlavniReport' => $attachment->getRecordID(), 'id' => $reporter->getRecordID()])) {
            if ($oldReportId) {
                $attachment->deleteFromFlexiBee($oldReportId);
            }

            $reporter->addStatusMessage(_('Report updated'), 'success');
        }
    }
}
