<?php

namespace AbraFlexi;

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

require_once '../test/bootstrap.php';
require_once __DIR__ . '/common.php';

function evidenceToClass($evidence) {
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
}

$outFile = 'Properties.php';
$ok = 0;

$evidenceProps = '<?php
/**
 * AbraFlexi - Evidence Properties.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-' . date('Y') . ' Spoje.Net
 */

namespace AbraFlexi;

/**
 * Evidence Properties
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list.json vlastnosti evidence
 */

class Properties
{
';

$statuser = new Status();

$syncer = new RO(null, ['throwException' => false]);
$syncer->setObjectName('FlexiBee Evidence Properties');
$syncer->addStatusMessage('Updating Evidences Properties');

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $evidenceInfo = EvidenceList::$evidences[$evidencePath];
    if ($evidencePath == 'nastaveni') {
        $info = json_decode(file_get_contents('nastaveni-properties.json'),
                true);
        $structure = \Ease\Functions::reindexArrayBy($info['properties']['property'], 'propertyName');
    } else {
        $structure = $syncer->getOnlineColumnsInfo($evidencePath);
    }

    if (array_key_exists('extIdSupported', $evidenceInfo) && ($evidenceInfo['extIdSupported'] == true)) {
        $structure['external-ids'] = [
            "showToUser" => "false",
            "propertyName" => "external-ids",
            "fkEvidencePath" => 'external-ids',
            "dbName" => "extid",
            "name" => "external-ids",
            "title" => "extIDs",
            "type" => "relation",
            "isVisible" => "true",
            "isSortable" => "false",
            "isHighlight" => "false",
            "inId" => "true",
            "inSummary" => "true",
            "inDetail" => "true",
            "inExpensive" => "false",
            "mandatory" => "false",
            "isWritable" => "true",
            "isOverWritable" => "true",
            "hasBusinessLogic" => "false",
            "isUpperCase" => "false",
            "isLowerCase" => "false",
            "links" => null
        ];
    }

    if (array_key_exists('polozkyFaktury', $evidenceInfo) && ($evidenceInfo['polozkyFaktury'] == true)) {
        $structure['polozkyFaktury'] = [
            "showToUser" => "true",
            "propertyName" => "polozkyFaktury",
            "fkEvidencePath" => 'polozkyFaktury',
            "name" => "polozkyFaktury",
            "title" => "polozkyFaktury",
            "type" => "relation",
            "isVisible" => "true",
            "isSortable" => "false",
            "isHighlight" => "false",
            "inId" => "false",
            "inSummary" => "true",
            "inDetail" => "true",
            "inExpensive" => "true",
            "mandatory" => "false",
            "isWritable" => "true",
            "isOverWritable" => "true",
            "hasBusinessLogic" => "false",
            "isUpperCase" => "false",
            "isLowerCase" => "false",
            "url"=> "http:\/\/demo.flexibee.eu\/c\/demo\/faktura-vydana-polozka",
            "links" => null
        ];

        $structure['typDoklBan'] = [
            "showToUser" => "true",
            "propertyName" => "typDoklBan",
            "fkEvidencePath" => 'typDoklBan',
            "name" => "typDoklBan",
            "title" => "typDoklBan",
            "type" => "relation",
            "isVisible" => "true",
            "isSortable" => "false",
            "isHighlight" => "false",
            "inId" => "false",
            "inSummary" => "true",
            "inDetail" => "true",
            "inExpensive" => "true",
            "mandatory" => "false",
            "isWritable" => "true",
            "isOverWritable" => "true",
            "hasBusinessLogic" => "false",
            "isUpperCase" => "false",
            "isLowerCase" => "false",
            "url"=> "http:\/\/demo.flexibee.eu\/c\/demo\/faktura-vydana-polozka",
            "links" => null
        ];
        
    }




    if (count($structure)) {
        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': structure obtained',
                'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': structure problem',
                'error');
    }
    file_put_contents('Properties.' . $evidencePath . '.json',
            json_encode($structure));

    $evidenceClass = evidenceToClass($evidencePath);
    $evidenceClassFile = '../src/AbraFlexi/' . $evidenceClass . '.php';
    if (file_exists($evidenceClassFile)) {
        $evidenceClassBody = file_get_contents($evidenceClassFile);

        if (array_key_exists('firma', $structure)) {
            if (!strstr($evidenceClassBody, 'use Firma;')) {
                $syncer->addStatusMessage(sprintf('use Firma; not found in %s ',
                                $evidenceClassFile), 'warning');
            }
        }

        if (array_key_exists('stitky', $structure)) {
            if (!strstr($evidenceClassBody, 'use Stitky;')) {
                $syncer->addStatusMessage(sprintf('use Stitky; not found in %s ',
                                $evidenceClassFile), 'warning');
            }
        }
    }
}

$syncer->addStatusMessage('Updating of ' . $ok . ' Evidences Properties done',
        'success');
