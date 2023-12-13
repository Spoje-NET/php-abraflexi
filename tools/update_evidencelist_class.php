<?php

namespace AbraFlexi;

define('EASE_APPNAME', 'AbraFlexiStaticEvidenceListGenerator');
define('EASE_LOGGER', 'console|syslog');

require_once '../test/bootstrap.php';
require_once  __DIR__ . '/common.php';

$outFile = 'EvidenceList.php';
$outJson = 'EvidenceList.json';
$outFullJson = 'EvidenceFullList.json';

/**
 * Obtain structure for given evidence
 *
 * @param string     $evidence
 * @param RO $syncer Class to read from FlexiBee
 * @return array     Evidence structure
 */
function getColumnsInfo($evidence, RO $syncer) {
    $useKeywords = [];
    $flexinfo = $syncer->performRequest($evidence . '/properties.json');
    if (count($flexinfo) && array_key_exists('properties', $flexinfo)) {
        foreach ($flexinfo['properties']['property'] as $evidenceProperty) {
            $key = $evidenceProperty['propertyName'];
            $useKeywords[$key] = $evidenceProperty;
            $useKeywords[$key]['name'] = $evidenceProperty['name'];
            $useKeywords[$key]['type'] = $evidenceProperty['type'];
        }
    }
    return $useKeywords;
}

$statuser = new Status();

$evidenceList = '<?php
/**
 * AbraFlexi - List of Evidencies.
 *
 * Generated: ' . date(DATE_RFC2822) . ' 
 * From:      ' . $statuser->url . '
 *    
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-'.date('Y').' Spoje.Net
 */

namespace AbraFlexi;

/**
 * Evidencies listing and its properties
 * Seznam Evidencí a jejich vlastnosti
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
 */
class EvidenceList extends RO
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = \'evidence-list\';

    /**
     * Základní namespace pro komunikaci s FlexiBee.
     * Basic namespace for communication with FlexiBee
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = \'evidences\';

    /**
     * Column use to identfy record
     *
     * @var string
     */
    public $keyColumn = \'evidencePath\';

';

$evidenceList .= '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
$evidenceList .= ' static public $version = \'' . $statuser->getDataValue('version') . '\';

';

$syncer = new EvidenceList();
$syncer->addStatusMessage('Updating Evidences List');

$evidencies = $syncer->getColumnsFromAbraFlexi(['evidencePath', 'evidenceName']);

//Add Evidencies Forbidden on demo.FlexiBee.eu
$evidencies[] = [
    "evidenceType" => "NASTAVENI",
    "evidenceName" => "Nastavení",
    "evidencePath" => "nastaveni",
    "importStatus" => "NOT_DOCUMENTED",
    "className" => "cz.winstrom.vo.nast.Nastaveni",
    "formCode" => "nNastav"
];

$evidencies[] = [
    "evidenceType" => "UZIVATELE",
    "evidenceName" => "Osoby a uživatelé",
    "evidencePath" => "uzivatel",
    "importStatus" => "NOT_DOCUMENTED",
    "className" => "cz.winstrom.vo.w.Uzivatel",
    "formCode" => "cisOsoby"
];

$evlist = [];
foreach ($evidencies as $evidenceID => $evidence) {
    if (array_key_exists('evidencePath', $evidence)) {
        $evlist[$evidence['evidencePath']] = $evidence['evidenceName'];
        $fullList[$evidence['evidencePath']] = $evidence;
    }
    
    if (array_key_exists('extIdSupported', $evidence)) {
        $evidencies[$evidenceID]['extIdSupported'] = ($evidencies[$evidenceID]['extIdSupported'] == 'true');
    } else {
        $evidencies[$evidenceID]['extIdSupported'] = false;
    }
}

asort($evlist);
asort($fullList);

$evidenceList .= '    /**
     * Evidences Path/Name listing.
     *
     * @var array
     */
';
$evidenceList .= ' static public $name = ' . varexport($evlist, true) . ';

';
$evidenceList .= '    /**
     * All Evidence\'s all properties listing.
     *
     * @var array
     */
';
$evidenceList .= ' static public $evidences = ' . varexport($fullList, true) . ';

';

$evidenceList .= '
    /**
     * There is not ID
     * 
     * @deprecated since version 1.24 - use getRecordCode() instead
     *
     * @return null company database name
     */
    public function getRecordID() {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getRecordCode() {
        return $this->getDataValue(\'evidencePath\');
    }
    ';

$evidenceList .= '}
';

$syncer->addStatusMessage('Updating of ' . count($fullList) . ' Evidences Infos done',
        'success');
file_put_contents($outFile, $evidenceList);

file_put_contents($outJson, json_encode($evlist));

file_put_contents($outFullJson, json_encode($fullList));

