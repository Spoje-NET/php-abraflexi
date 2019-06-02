<?php

namespace FlexiPeeHP;

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

require_once '../testing/bootstrap.php';

function evidenceToClass($evidence)
{
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
}
$outFile = 'Properties.php';
$ok      = 0;

$evidenceProps = '<?php
/**
 * FlexiPeeHP - Evidence Properties.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-'.date('Y').' Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidence Properties
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list.json vlastnosti evidence
 */

class Properties
{
';

$statuser = new Status();


$syncer = new FlexiBeeRO();
$syncer->setObjectName('FlexiBee Evidence Properties');
$syncer->addStatusMessage('Updating Evidences Properties');

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    if ($evidencePath == 'nastaveni') {
        $info      = json_decode(file_get_contents('nastaveni-properties.json'),
            true);
        $structure = $info['properties']['property'];
    } else {
        $structure = $syncer->getOnlineColumnsInfo($evidencePath);
    }

    if (count($structure)) {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure obtained',
            'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure problem',
            'error');
    }
    file_put_contents('Properties.'.$evidencePath.'.json',
        json_encode($structure));

    $evidenceClass     = evidenceToClass($evidencePath);
    $evidenceClassFile = '../src/FlexiPeeHP/'.$evidenceClass.'.php';
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

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Properties done',
    'success');
