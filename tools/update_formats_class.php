<?php

namespace AbraFlexi;

define('EASE_APPNAME', 'AbraFlexi Formats');
define('EASE_LOGGER', 'console|syslog');

require_once '../tests/bootstrap.php';
require_once  __DIR__ . '/common.php';

$outFile = 'Formats.php';
$outJson = 'Formats.json';
$ok = 0;

/**
 * Obtain Formats for given evidence
 *
 * @param string     $evidence
 * @param RO $syncer Class to read from FlexiBee
 * @return array     Formats structure
 */
function getEvidenceFormats($evidence, RO $syncer) {

    $syncer->setEvidence($evidence);
    $flexinfo = $syncer->getColumnsFromAbraFlexi(['id'], ['limit' => 1]);
    if (is_array($flexinfo) && is_array($flexinfo[0]) && array_key_exists('id', $flexinfo[0])) {
        $id = is_numeric($flexinfo[0]['id']) ? intval($flexinfo[0]['id']) : $flexinfo[0]['id'];
        $formats = [];
        foreach (Formats::$formats as $cancode => $candidate) {
            $syncer->setFormat($candidate['suffix']);
            $syncer->loadFromAbraFlexi($id);
            if ($syncer->lastResponseCode == 200) {
                $formats[$cancode] = $candidate['suffix'];
            }
        }
    } else {
        $syncer->addStatusMessage(sprintf('Missing formats for %s', $evidence),
                'warning');
        $formats = ['HTML' => 'html', 'XML' => 'xml', 'JSON' => 'json', 'CSV' => 'csv'];
    }
    return $formats;
}

$evidenceFormats = '<?php
/**
 * AbraFlexi - Evidence Formats.
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2015-' . date('Y') . ' Spoje.Net
 */
namespace AbraFlexi;

/**
 * Evidence Formats
 *
 * @link https://demo.flexibee.eu/devdoc/formats Provádění akcí
 */
class Formats
{
';
$statuser = new Status();
$evidenceFormats .= ' /**
 * Source FlexiBee server version.
 *
 * @var string
 */
';
$evidenceFormats .= ' static public $version = \'' . $statuser->getDataValue('version') . '\';

';

$evidenceFormats .= '
    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     * @var array formats known to flexibee
     */
    public static $formats = [
        \'JS\' => [
            \'desc\' => \'JavaScript\',
            \'suffix\' => \'js\', 
            \'content-type\' => \'application/javascript\', 
            \'import\' => false
            ],
        \'PNG\' => [
            \'desc\' => \'Portable Network Graphics\',
            \'suffix\' => \'png\', 
            \'content-type\' => \'image/png\', 
            \'import\' => false
            ],
        \'JPG\' => [
            \'desc\' => \'JPEG File Interchange Format.\',
            \'suffix\' => \'jpg\', 
            \'content-type\' => \'image/jpeg\', 
            \'import\' => false
            ],
        \'CSS\' => [
            \'desc\' => \'Kaskádový styl\',
            \'suffix\' => \'css\', 
            \'content-type\' => \'text/css\', 
            \'import\' => false
            ],
        \'HTML\' => [
            \'desc\' => \'HTML stránka pro zobrazení informací na webové stránce.\',
            \'suffix\' => \'html\', 
            \'content-type\' => \'text/html\', 
            \'import\' => false
            ],
        \'XML\' => [
            \'desc\' => \'Strojově čitelná struktura ve formátu XML.\', 
            \'suffix\' => \'xml\',
            \'content-type\' => \'application/xml\', 
            \'import\' => true],
        \'JSON\' => [
            \'desc\' => \'Strojově čitelná struktura ve formátu JSON. \', 
            \'suffix\' => \'json\',
            \'content-type\' => \'application/json\', 
            \'import\' => true
            ],
        \'CSV\' => [
            \'desc\' => \'Tabulkový výstup do formátu CSV (Column Separated Values).\',
            \'suffix\' => \'csv\', 
            \'content-type\' => \'text/csv\', 
            \'import\' => true
            ],
        \'DBF\' => [
            \'desc\' => \'Databázový výstup ve formátu DBF (dBase).\', 
            \'suffix\' => \'dbf\',
            \'content-type\' => \'application/dbf\', 
            \'import\' => true
            ],
        \'XLS\' => [
            \'desc\' => \'Tabulkový výstup ve formátu Excel.\', 
            \'suffix\' => \'xls\',
            \'content-type\' => \'application/ms-excel\', 
            \'import\' => true
            ],
        \'ISDOC\' => [
            \'desc\' => \'e-faktura ISDOC.\', 
            \'suffix\' => \'isdoc\', 
            \'content-type\' => \'application/x-isdoc\',
            \'import\' => false
            ],
        \'ISDOCx\' => [
            \'desc\' => \'e-faktura ISDOC s PDF přílohou\', 
            \'suffix\' => \'isdocx\',
            \'content-type\' => \'application/x-isdocx\',
            \'import\' => false
            ],
        \'EDI\' => [
            \'desc\' => \'Elektronická výměna data (EDI) ve formátu INHOUSE.\',
            \'suffix\' => \'edi\', 
            \'content-type\' => \'application/x-edi-inhouse\', 
            \'import\' => \'objednavka-prijata\'
            ],
        \'PDF\' => [
            \'desc\' => \'Generování tiskového reportu. Jedná se o stejnou funkci která je dostupná v aplikaci. Export do PDF\',
            \'suffix\' => \'pdf\', 
            \'content-type\' => \'application/pdf\', 
            \'import\' => false
            ],
        \'vCard\' => [
            \'desc\' => \'Výstup adresáře do formátu elektronické vizitky vCard.\',
            \'suffix\' => \'vcf\', 
            \'content-type\' => \'text/vcard\', 
            \'import\' => false
            ],
        \'iCalendar\' => [
            \'desc\' => \'Výstup do kalendáře ve formátu iCalendar. Lze takto exportovat události, ale také třeba splatnosti u přijatých či vydaných faktur.\',
            \'suffix\' => \'ical\', 
            \'content-type\' => \'text/calendar\', 
            \'import\' => false
            ],
        \'TEXT\' => [
            \'desc\' => \'Prostý text\', 
            \'suffix\' => \'txt\',
            \'content-type\' => \'text/plain\', 
            \'import\' => false
            ],
        \'TTF\' => [
            \'desc\' => \'TrueType font\', 
            \'suffix\' => \'ttf\',
            \'content-type\' => \'application/x-font-truetype\', 
            \'import\' => false
            ],
        \'JASPERReport\' => [
            \'desc\' => \'JasperReports\',
            \'content-type\' => \'application/x-java-serialized-object\',
            \'suffix\'=> \'jasper\',
            \'import\'=> false
        ]
    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    static public function byContentType()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, \'content-type\');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    static public function bySuffix()
    {
        return \Ease\Functions::reindexArrayBy(self::$formats, \'suffix\');
    }

    /**
     * Obtain Suffix for given content
     *
     * @param string $suffix
     * @return string
     */
    static public function suffixToContentType($suffix)
    {
        $types = self::bySuffix();
        return isset($types[$suffix]) ? $types[$suffix][\'content-type\'] : null;
    }

    /**
     * Obtain Content-Type for given suffix
     *
     * @param string $contentType
     * @return string
     */
    static public function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType();
        return isset($types[$contentType]) ? $types[$contentType][\'suffix\'] : null;
    }

    /**
     * Obtain json for application/json.
     */
    public static function contentTypeToResponseFormat(string $contentType, string $url = \'\'): string
    {
        if (!empty($url)) {
            $url = parse_url($url, \PHP_URL_PATH);
        }

        $contentTypeClean = strstr($contentType, \';\') ? substr(
            $contentType,
            0,
            strpos($contentType, \';\'),
        ) : $contentType;

        switch ($url) {
            case \'/login-logout/logi\n\':
                $responseFormat = \'json\';

                break;

            default:
                switch ($contentTypeClean) {
                    case \'text/javascript\':
                        $responseFormat = \'js\';

                        break;

                    default:
                        $responseFormat = self::contentTypeToSuffix($contentTypeClean);

                        break;
                }

                break;
        }

        return (string)$responseFormat;
    }

    ';

$syncer = new RO(null, ['throwException' => false]);
$syncer->setObjectName('FlexiBee Evidence Formats');
$syncer->addStatusMessage('Updating Evidences Formats');

$formats = [];

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getEvidenceFormats($evidencePath, $syncer);

    $formats[$evidencePath] = $structure;

    if (count($structure)) {
        $evidenceFormats .= '    /**
     * Evidence ' . $evidencePath . ' (' . $evidenceName . ') Formats.
     *
     * @var array
     */
';
        $evidenceFormats .= ' static public $' . lcfirst(Functions::evidenceToClassName($evidencePath)) . ' = ' . varexport($structure,
                        true) . ';
';
        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': formats: ' . implode(',', $structure), 'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos . ' of ' . count(EvidenceList::$name) . ' ' . $evidencePath . ': obtaining formats problem',
                'error');
    }
}

$evidenceFormats .= '}
';

$syncer->addStatusMessage('Updating of ' . $ok . ' Evidences Formats done',
        'success');
file_put_contents($outFile, $evidenceFormats);

file_put_contents($outJson, json_encode($formats));
