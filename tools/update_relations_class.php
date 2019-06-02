<?php

namespace FlexiPeeHP;

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

require_once '../testing/bootstrap.php';


$outFile = 'Relations.php';
$outJson = 'Relations.json';
$ok      = 0;

/**
 * Obtain Relations for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array     Relations structure
 */
function getEvidenceRelations($evidence, FlexiBeeRO $syncer)
{
    $relations = [];
    $flexinfo  = $syncer->performRequest($evidence.'/relations.json');
    if (count($flexinfo) && array_key_exists('relations', $flexinfo)) {
        if (isset($flexinfo['relations']['relation'])) {
            foreach ($flexinfo['relations']['relation'] as $evidenceRelations) {
                $relations[] = $evidenceRelations;
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
 * FlexiPeeHP - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

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
$evidenceRels .= ' static public $version = \''.$statuser->getDataValue('version').'\';

';


$syncer = new FlexiBeeRO();
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
     * Evidence '.$evidencePath.' ('.$evidenceName.') Relations.
     *
     * @var array
     */
';
        $evidenceRels .= ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
                true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': relations obtained',
            'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining relations problem',
            'error');
    }
}

$evidenceRels .= '}
';

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Properties done',
    'success');
file_put_contents($outFile, $evidenceRels);

file_put_contents($outJson, json_encode($relations));

