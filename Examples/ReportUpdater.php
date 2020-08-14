<?php
/**
 * FlexiPeeHP - Example how to upload new version of custom Report
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2020 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';


define('EASE_APPNAME', 'ReportUploader');
define('EASE_LOGGER', 'syslog|console');

if ($argc < 3) {
    echo "usage: " . $argv[0] . " <recordIdent> <formInfoCode> <reportfile> \n";
    echo "example: " . $argv[0] . "  code:PokladDen pokDenik WinstromReports/vykazAnalyzaZakazky/analyzaZakazky.jrxml \n";
} else {
    $reportID = $argv[1];

    if ($argc == 3) {
        if (is_file($argv[2])) {
            $reportFile = $argv[2];
        } else {
            $formCode = $argv[2];
            $reportFile = $argv[3];
        }
    }

    if (strstr($reportFile, '.jrxml')) {
        system('jaspercompiler ' . $reportFile); // https://github.com/VitexSoftware/jaspercompiler
        $reportFile = str_replace('.jrxml', '.jasper', $reportFile);
    }


    if (file_exists($reportFile)) {

        $reporter = new \FlexiPeeHP\Report($reportID);
        $oldReportId = intval($reporter->getDataValue('hlavniReport'));
        $attachment = \FlexiPeeHP\Priloha::addAttachmentFromFile($reporter, $reportFile);
        if ($reporter->sync(['hlavniReport' => $attachment->getRecordID(), 'id' => $reporter->getRecordID()])) {
            if ($oldReportId) {
                $attachment->deleteFromFlexiBee($oldReportId);
            }
            $reporter->addStatusMessage(_('Report updated'), 'success');
        }
    }
}


