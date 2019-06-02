<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

/**
 * Obtain structure for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array     Evidence structure
 */
function getColumnsInfo($evidence, FlexiBeeRO $syncer)
{
    $useKeywords = [];
    $flexinfo    = $syncer->performRequest($evidence.'/properties.json');
    if (count($flexinfo) && array_key_exists('properties', $flexinfo)) {
        foreach ($flexinfo['properties']['property'] as $evidenceProperty) {
            $key                       = $evidenceProperty['propertyName'];
            $useKeywords[$key]         = $evidenceProperty;
            $useKeywords[$key]['name'] = $evidenceProperty['name'];
            $useKeywords[$key]['type'] = $evidenceProperty['type'];
        }
    }
    return $useKeywords;
}

function controlData($data, $fbColumns, $fbRelations)
{
    $controlResult = [];
    if (count($fbColumns)) {
        foreach ($data as $key => $value) {
            if ($key == 'external-ids') {
                continue;
            }

            if (strstr($key, '@')) {
                $baseKey = substr($key, 0, strrpos($key, '@'));
                if (!array_key_exists($baseKey, $fbColumns)) {
                    $controlResult[$key][] = sprintf('unknown column property %s',
                        $key);
                }
                continue;
            }

            if (!array_key_exists($key, $fbColumns)) {
                if (is_array($fbRelations) && !array_key_exists($key,
                        $fbRelations)) {
                    $controlResult[$key][] = sprintf('unknown column %s', $key);
                }
            }
        }
    }
    return $controlResult;
}
$syncer = new EvidenceList();

$evidencies = $syncer->getColumnsFromFlexibee(['evidencePath', 'evidenceName']);


$controlResult = [];
foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $evlist[$evidence['evidencePath']] = $evidence['evidenceName'];

    $syncer->setEvidence($evidence['evidencePath']);
    $firstRecord = $syncer->getFlexiData(null, ['limit' => 1]);
    if (count($firstRecord) && isset($firstRecord[0]) && count($firstRecord[0])) {
        $controlled = controlData($firstRecord[0], $syncer->getColumnsInfo(),
            $syncer->getRelationsInfo());
        if (count($controlled)) {
            $controlResult[$evidence['evidencePath']] = $controlled;
        }
    }
}

echo json_encode($controlResult, JSON_PRETTY_PRINT);


