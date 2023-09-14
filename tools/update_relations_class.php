<?php

namespace AbraFlexi;

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

require_once '../test/bootstrap.php';
require_once  __DIR__ . '/common.php';

$outFile = 'Relations.php';
$outJson = 'Relations.json';
$ok = 0;

/**
 * Obtain Relations for given evidence
 *
 * @param string     $evidence
 * @param RO $syncer Class to read from FlexiBee
 * 
 * @return array     Relations structure
 */
function getEvidenceRelations($evidence, RO $syncer) {
    $relations = [];

    if ($evidence == 'atribut') {
        echo '';
    }

    $flexinfo = $syncer->performRequest($evidence . '/relations.json');
    if (count($flexinfo) && array_key_exists('relations', $flexinfo)) {

        if (array_key_exists('relations', $flexinfo)) {
            foreach ($flexinfo['relations'] as $evidenceRelations) {
                if (count($evidenceRelations) && array_key_exists('relation', $evidenceRelations)) {
                    $relations = \Ease\Functions::reindexArrayBy(array_key_exists('url', $evidenceRelations['relation']) ? [$evidenceRelations['relation']] : $evidenceRelations['relation'], 'url');
                }
            }
        } else {
            $syncer->addStatusMessage(sprintf('Missing relations for %s',
                            $evidence), 'warning');
        }
    }
    return $relations;
}

$evidenceRels = '<?php
/**
 * AbraFlexi - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Evidence Relations
 *
 * @link https://demo.flexibee.eu/devdoc/relations Provádění akcí
 */

class Relations
{
';
$statuser = new Status();
$evidenceRels .= '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
$evidenceRels .= ' static public $version = \'' . $statuser->getDataValue('version') . '\';

';

$syncer = new RO(null, ['throwException' => false]);
$syncer->setObjectName('FlexiBee Evidence Relations');
$syncer->addStatusMessage('Updating Evidences Relations');

$relations = [];

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getEvidenceRelations($evidencePath, $syncer);

    $relations[$evidencePath] = $structure;

    if (count($structure)) {
        $evidenceRels .= '    /**
     * Evidence ' . $evidencePath . ' (' . $evidenceName . ') Relations.
     *
     * @var array
     */
';
        $evidenceRels .= ' static public $' . lcfirst(RO::evidenceToClassName($evidencePath)) . ' = ' . varexport($structure,
                        true) . ';
';

        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': relations obtained',
                'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': obtaining relations problem',
                'error');
    }
}

$evidenceRels .= '}
';

$syncer->addStatusMessage('Updating of ' . $ok . ' Evidences Properties done',
        'success');
file_put_contents($outFile, $evidenceRels);

file_put_contents($outJson, json_encode($relations));

