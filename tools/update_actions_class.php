<?php

namespace FlexiPeeHP;

if (!defined('EASE_APPNAME')) {
    define('EASE_APPNAME', 'FlexiPeeHP Actions');
}
if (!defined('EASE_LOGGER')) {
    define('EASE_LOGGER', 'console|syslog');
}

require_once '../testing/bootstrap.php';

$outFile = 'Actions.php';
$outJson = 'Actions.json';
$ok      = 0;

/**
 * Obtain Actions for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array Actions structure
 */
function getEvidenceActions($evidence, FlexiBeeRO $syncer)
{
    $columns = $syncer->getColumnsInfo($evidence);
    if (array_key_exists('zamekK', $columns)) {
        $syncer->addStatusMessage('Adding LOCK actions to evidence '.$evidence,
            'debug');
        $actions = [
            'lock' => [
                'actionId' => 'lock',
                'actionName' => 'Zamknout',
                'needInstance' => 'true',
                'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
                'isRealAction' => 'true',
                'isService' => 'YES',
            ],
            'lock-for-ucetni' => [
                'actionId' => 'lock-for-ucetni',
                'actionName' => 'Zamknout pro učetní',
                'needInstance' => 'true',
                'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
                'isRealAction' => 'true',
                'isService' => 'YES',
            ],
            'unlock' => [
                'actionId' => 'unlock',
                'actionName' => 'Odemknout',
                'needInstance' => 'true',
                'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
                'isRealAction' => 'true',
                'isService' => 'YES',
            ]
        ];
    } else {
        $actions = [];
    }
    $flexinfo = $syncer->performRequest($evidence.'/actions.json');
    if (count($flexinfo) && array_key_exists('actions', $flexinfo)) {
        if (isset($flexinfo['actions']['action'])) {
            if (\Ease\Sand::isAssoc($flexinfo['actions']['action'])) {
                $key           = $flexinfo['actions']['action']['actionId'];
                $actions[$key] = $flexinfo['actions']['action'];
            } else {
                foreach ($flexinfo['actions']['action'] as $evidenceActions) {
                    if (array_key_exists('actionId', $evidenceActions)) {
                        $key           = $evidenceActions['actionId'];
                        $actions[$key] = $evidenceActions;
                    } else {
                        $syncer->addStatusMessage(sprintf('actionId not set for %s',
                                $evidence.' / '.$evidenceActions['actionName']),
                            'warning');
                    }
                }
            }
        } else {
            $syncer->addStatusMessage(sprintf('Missing actions for %s',
                    $evidence), 'warning');
        }
    }
    return $actions;
}
$evidenceActions = '<?php
/**
 * FlexiPeeHP - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-'.date('Y').' Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * EvidenceActions
 *
 * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */

class Actions
{
';

$statuser        = new Status();
$evidenceActions .= '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
$evidenceActions .= ' static public $version = \''.$statuser->getDataValue('version').'\';

';

$syncer = new FlexiBeeRO();
$syncer->setObjectName('FlexiBee Evidence Actions');
$syncer->addStatusMessage('Updating Evidences Actions');

$structures = [];

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure                 = getEvidenceActions($evidencePath, $syncer);
    $structures[$evidencePath] = $structure;
    if (count($structure)) {
        $evidenceActions .= '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') Actions.
     *
     * @var array
     */
';
        $evidenceActions .= ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
                true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': '.implode(',',
                array_keys($structure)), 'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining actions problem',
            'error');
    }
}

$evidenceActions .= '}
';

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Actions done',
    'success');
file_put_contents($outFile, $evidenceActions);

file_put_contents($outJson, json_encode($structures));
