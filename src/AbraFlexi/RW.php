<?php

declare(strict_types=1);

/**
 * AbraFlexi - Třída pro zápis do AbraFlexi.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Základní třída pro zápis do AbraFlexi
 *
 * @url https://demo.flexibee.eu/devdoc/http-operations
 */
class RW extends RO
{
    /**
     * Sloupeček obsahující datum vložení záznamu do shopu.
     *
     * @var string
     */
    public $myCreateColumn = 'false';

    /**
     * Slopecek obsahujici datum poslení modifikace záznamu do shopu.
     *
     * @var string
     */
    public $myLastModifiedColumn = 'lastUpdate';

    /**
     * Last Inserted ID.
     *
     * @var int|null
     */
    public $lastInsertedID = null;

    /**
     * Array of fields for next curl POST operation
     *
     * @var string
     */
    public $postFields = null;

    /**
     * Transaction processing mode
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/tx/ Transakční zpracování
     * @var boolean
     */
    public $atomic = null;

    /**
     * Record Copy helper
     *
     * @var int
     */
    private $sourceId = null;

    /**
     * Dry Run mode indicator
     *
     * @link https://podpora.flexibee.eu/cs/articles/4720123-testovaci-ulozeni-dry-run
     *
     * @var boolean
     */
    public $dryRun = false;

    /**
     * SetUp Object to be ready for work
     *
     * @param array $options Object Options (authSessionId,user,password,
     *                                       url,company,evidence,companyUrl
     *                                       prefix,defaultUrlParams,debug,ver,dry-run
     *                                       detail,offline,atomic,filter,ignore404
     */
    public function setUp($options = array())
    {
        if (array_key_exists('atomic', $options)) {
            $this->atomic = (bool) $options['atomic'];
        }
        if (array_key_exists('dry-run', $options)) {
            $this->dryRun = boolval($options['dry-run']);
            $this->defaultUrlParams['dry-run'] = $this->dryRun ? 'true' : 'false';
        }
        return parent::setUp($options);
    }

    /**
     * Save record (if evidence allow to).
     * Uloží záznam (pokud to evidence dovoluje)
     *
     * @param array $data Data to save
     * @throws Exception Evidence does not support Import
     *
     * @return array odpověď
     */
    public function insertToAbraFlexi($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }
        $this->postFields = $this->getJsonizedData(
            $data,
            $this->debug ? JSON_PRETTY_PRINT : 0
        );
        return $this->performRequest('', 'PUT');
    }

    /**
     * Parse Response array
     *
     * @param array $responseDecoded
     * @param int $responseCode Request Response Code
     *
     * @return array main data part of response
     */
    public function parseResponse($responseDecoded, $responseCode)
    {
        $parsedData = parent::parseResponse($responseDecoded, $responseCode);
        switch ($responseCode) {
            case 200: //The Dry Run response
                if ($this->dryRun === false) {
                    break; // Read operation does not return results
                }
            case 201: //Success Write
                if (is_array($responseDecoded)) {
                    $this->responseStats = array_key_exists(
                        'stats',
                        $responseDecoded
                    ) ? (isset($responseDecoded['stats'][0]) ? array_map('intval', $responseDecoded['stats'][0]) : array_map('intval', $responseDecoded['stats'])) : null;
                    if (isset($responseDecoded[$this->resultField][0]['id'])) {
                        $this->lastInsertedID = intval($responseDecoded[$this->resultField][0]['id']);
                        $this->setMyKey($this->lastInsertedID);
                    } else {
                        $this->lastInsertedID = null;
                    }
                    if (count($this->chained)) {
                        $this->assignResultIDs($this->extractResultIDs($responseDecoded[$this->resultField]));
                    }
                }
                $parsedData = $responseDecoded['results'];
        }
        return $parsedData;
    }

    /**
     * Parse error message response
     *
     * @param array $responseDecoded
     *
     * @return int number of errors processed
     */
    public function parseError(array $responseDecoded)
    {
        if (array_key_exists('results', $responseDecoded)) {
            if (array_key_exists(0, $responseDecoded['results'])) {
                foreach ($responseDecoded['results'] as $result) {
                    if (array_key_exists('request-id', $result)) {
                        unset($result['request-id']);
                    }

                    if (array_key_exists('errors', $result)) {
                        foreach ($result as $error) {
                            $this->errors[] = is_array($error) ? current($error) : $error;
                        }
                    }
                }
            } else {
                foreach ($responseDecoded['results'][0]['result'] as $result) {
                    if (array_key_exists('errors', $result)) {
                        foreach ($result as $error) {
                            $this->errors[] = is_array($error) ? current($error) : $error;
                        }
                    }
                }
            }

            foreach ($this->errors as $errorInfo) {
                if ($this->debug && array_key_exists('for', $errorInfo)) {
                    unset($errorInfo['message']);
                    $this->addStatusMessage(json_encode($errorInfo), 'debug');
                }
            }
        } else {
            parent::parseError($responseDecoded);
        }
        return count($this->errors);
    }

    /**
     * Assign result IDs to its source objects
     *
     * @param array $candidates AbraFlexi insert IDs  prepared by extractResultIDs()
     */
    public function assignResultIDs($candidates)
    {
        foreach ($this->chained as $chid => $chained) {
            $chainedEvidence = $chained->getEvidence();
            $chainedExtid = $chained->getRecordID();
            if (is_array($chainedExtid)) { //if there are more IDs
                foreach ($chainedExtid as $extId) { //find external ID in format ext:.....
                    if (stripos($extId, 'ext:') === 0) {
                        $chainedExtid = $extId;
                        break;
                    }
                }
            }
            $chained->getData();
            if (isset($candidates[$chainedEvidence][$chainedExtid])) {
                $chained->setMyKey($candidates[$chainedEvidence][$chainedExtid]);
                $chained->setDataValue('external-ids', [$chainedExtid]);
            }
            if (count($this->chained[$chid]->chained)) {
                $this->chained[$chid]->assignResultIDs($candidates);
            }
        }
    }

    /**
     * Extract IDs from AbraFlexi response Array
     *
     * @param array $resultInfo AbraFlexi response
     *
     * @return array List of [ 'evidence1'=>[ 'original-id'=>numericID,'original-id2'=>numericID2 ], 'evidence2'=> ... ]
     */
    public function extractResultIDs($resultInfo)
    {
        $candidates = [];
        foreach ($resultInfo as $insertResult) {
            $newID = $insertResult['id'];
            if (array_key_exists('request-id', $insertResult)) {
                $extid = $insertResult['request-id'];
            } else {
                $extid = null;
            }
            $evidence = explode('/', $insertResult['ref'])[3];
            $candidates[$evidence][$extid] = $newID;
        }
        return $candidates;
    }

    /**
     * Give you last inserted record ID.
     *
     * @return int
     */
    public function getLastInsertedId()
    {
        return $this->lastInsertedID;
    }

    /**
     * Smaže záznam
     * Delete record in AbraFlexi
     *
     * @param int|string $id identifikátor záznamu
     *
     * @return boolean Response code is 200 ?
     */
    public function deleteFromAbraFlexi($id = null)
    {
        if (is_null($id)) {
            $id = $this->getRecordIdent();
        }

        $this->performRequest(
            $this->getEvidenceUrl() . '/' . self::urlizeId($id),
            'DELETE'
        );
        return $this->lastResponseCode == 200;
    }

    /**
     * Control for existing column names in evidence and take data
     *
     * @param array $data Data to keep
     *
     * @return int number of records taken
     */
    public function takeData($data)
    {
        if ($this->debug === true) {
            $fbRelations = [];
            $fbColumns = $this->getColumnsInfo();
            foreach ($this->getRelationsInfo() as $relation) {
                if (is_array($relation) && isset($relation['url'])) {
                    $fbRelations[$relation['url']] = $relation['url'];
                }
            }
            if (count($fbColumns)) {
                foreach ($data as $key => $value) {
                    if (!array_key_exists($key, $fbColumns)) {
                        if (array_key_exists($key, $fbRelations) && !is_array($value)) {
                            $msg = sprintf('subevidence %s in evidence %s must bee an array', $key, $this->getEvidence());
                        } else {
                            $msg = sprintf('unknown column %s for evidence %s', $key, $this->getEvidence());
                        }
                        $this->addStatusMessage($msg, 'debug');
                    }
                }
            }
        }
        return parent::takeData($data);
    }

    /**
     * Control data for mandatory columns presence.
     *
     * @deprecated since version 1.8.7
     *
     * @param array $data
     *
     * @return array List of missing columns. Empty if all is ok
     */
    public function controlMandatoryColumns($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }
        $missingMandatoryColumns = [];
        if (!empty($data) && count($data)) {
            $fbColumns = $this->getColumnsInfo();
            if (count($fbColumns)) {
                foreach ($fbColumns as $columnName => $columnInfo) {
                    $mandatory = ($columnInfo['mandatory'] == 'true');
                    if ($mandatory && !array_key_exists($columnName, $data)) {
                        $missingMandatoryColumns[$columnName] = $columnInfo['name'];
                    }
                }
            }
        }
        return $missingMandatoryColumns;
    }

    /**
     * Control data for readonly columns presence.
     *
     * @param array $data
     *
     * @return array List of ReadOnly columns. Empty if all is ok
     */
    public function controlReadOnlyColumns($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        $readonlyColumns = [];

        $fbColumns = $this->getColumnsInfo();
        if (!empty($fbColumns) && count($fbColumns)) {
            foreach ($fbColumns as $columnName => $columnInfo) {
                $writable = ($columnInfo['isWritable'] == 'true');
                if (!$writable && !array_key_exists($columnName, $data)) {
                    $readonlyColumns[$columnName] = $columnInfo['name'];
                }
            }
        }
        return $readonlyColumns;
    }

    /**
     * Convert Timestamp to AbraFlexi Date format.
     *
     * @deprecated since version 2.19 - please use \AbraFlexi\Date() object instead
     *
     * @param int $timpestamp
     *
     * @return \AbraFlexi\Date or NULL
     */
    public static function timestampToFlexiDate($timpestamp = null)
    {
        $flexiDate = new Date();
        if (!is_null($timpestamp)) {
            $flexiDate->setTimestamp($timpestamp);
        }
        return $flexiDate;
    }

    /**
     * Convert Timestamp to Flexi DateTime format.
     *
     * @param int $timpestamp
     *
     * @return string AbraFlexi DateTime or NULL
     */
    public static function timestampToFlexiDateTime($timpestamp = null)
    {
        $flexiDateTime = null;
        if (!is_null($timpestamp)) {
            $date = new \DateTime();
            $date->setTimestamp($timpestamp);
            $flexiDateTime = $date->format('Y-m-dTH:i:s');
        }
        return $flexiDateTime;
    }

    /**
     * Add Data to evidence Branch
     * Přidá data do větve
     *
     * @thanksto Karel Běl
     *
     * @see Relations
     *
     * @param array   $data pole dat
     * @param string  $relationPath path evidence (relation) pro vkládaná data
     * @param boolean $removeAll
     *
     * @return boolean Operation success
     */
    public function addArrayToBranch(
        $data,
        $relationPath = 'polozkyDokladu',
        $removeAll = false
    ) {
        $currentBranchData = $this->getDataValue($relationPath);
        $branchData = $currentBranchData;
        $branchData[] = $data;
        if (
            is_array($this->getEvidence()) && array_key_exists(
                'bezPolozek',
                $this->getColumnsInfo()
            )
        ) {
            $this->setDataValue('bezPolozek', false);
        }
        if ($removeAll === true) {
            $this->setDataValue($relationPath . '@removeAll', true);
        }
        return $this->setDataValue($relationPath, $branchData);
    }

    /**
     * Vloží do větve data z objektu
     *
     * @param RO      $object    objekt evidence
     * @param boolean $removeAll flush older items
     */
    public function addObjectToBranch($object, $removeAll = false)
    {
        $this->addArrayToBranch(
            [$object->getEvidence() => $object->getData()],
            'polozkyDokladu',
            $removeAll
        );
    }

    /**
     * Přidá uživatelskou vazbu
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/uzivatelske-vazby/
     * @param string $vazba
     */
    public function vazbaAdd($vazba)
    {
        $this->addArrayToBranch(
            ['uzivatelska-vazba' => $vazba],
            'uzivatelske-vazby'
        );
    }

    /**
     * Smaže uživatelskou vazbu
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/uzivatelske-vazby/
     * @param string $vazba
     */
    public function vazbaDel($vazba)
    {
        $this->setDataValue('uzivatelska-vazba@action', 'delete');
        $this->addArrayToBranch(
            ['uzivatelska-vazba' => $vazba],
            'uzivatelske-vazby'
        );
    }

    /**
     * Převede data do Json formátu pro AbraFlexi.
     * Pokud jsou štítky pole, jsou převedeny na seznam oddělený čárkou.
     * Convert data to AbraFlexi like Json format.
     * Array of Labels is converted to coma separated list
     *
     * @param array $data
     * @param int   $options json_encode options like JSON_PRETTY_PRINT etc
     *
     * @return string
     */
    public function getJsonizedData($data = null, $options = 0)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        if (is_array($data) && array_key_exists('stitky', $data)) {
            if (is_array($data['stitky'])) {
                $data['stitky'] = implode(',', $data['stitky']);
            }
        }
        $dataToJsonize = parent::getJsonizedData($data, $options);
        return $dataToJsonize;
    }

    /**
     * Get Data Fragment specific for current object
     *
     * @param array $data
     *
     * @return array
     */
    public function getDataForJSON($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }
        $dataForJSON = parent::getDataForJSON($data);
        if (!is_null($this->atomic)) {
            $dataForJSON['@atomic'] = $this->atomic;
        }
        if (isset($this->sourceId)) {
            $dataForJSON['@sourceId'] = $this->sourceId;
            $this->sourceId = null;
        }
        return $dataForJSON;
    }

    /**
     * Insert current data into AbraFlexi and load actual record data back
     *
     * @param array $data Initial data to save
     *
     * @return boolean Operation success
     */
    public function sync($data = null)
    {
        $this->insertToAbraFlexi($data);
        $insertResult = $this->lastResponseCode;
        if ($insertResult == 201) {
            $this->reload();
        }
        $loadResult = $this->lastResponseCode;
        return $this->dryRun ? $insertResult == 200 : ($insertResult + $loadResult) == 401;
    }

    /**
     * Make Copy of given record with optional modifiactions
     *
     * !!!Experimental Feature!!!
     *
     * @param int  $source
     * @param array $overrides
     *
     * @return RW|null copied record object or null in case of failure
     */
    public function copy($source, $overrides = [])
    {
        $this->sourceId = $source;
        return $this->sync($overrides) ? $this : null;
    }

    /**
     * Perform given action (if availble) on current evidence/record
     * @url https://demo.flexibee.eu/devdoc/actions
     *
     * @param string $action one of evidence actions
     * @param string $method ext|int External method call operation in URL.
     *                               Internal add the @action element to request body
     *
     * @return boolean operation success
     */
    public function performAction(string $action, $method = 'int')
    {
        $actionsAvailble = $this->getActionsInfo();
        $result = false;
        if (
            is_array($actionsAvailble) && array_key_exists(
                $action,
                $actionsAvailble
            )
        ) {
            switch ($actionsAvailble[$action]['actionMakesSense']) {
                case 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT':
                case 'ONLY_WITH_INSTANCE': //Add instance
                    $urlSuffix = '/' . $this->__toString() . '/' . $action;
                    break;

                default:
                    $urlSuffix = '/' . $action;
                    break;
            }

            switch ($method) {
                case 'int':
                    $this->setAction($action);
                    $this->setPostFields($this->getJsonizedData(['id' => $this]));
                    $this->performRequest('', 'POST');
                    $result = $this->lastResponseCode == 201;
                    break;

                default:
                    $result = $this->performRequest(
                        $this->evidenceUrlWithSuffix($urlSuffix),
                        'GET'
                    );
                    break;
            }
        } elseif ($this->throwException === true) {
            $this->lastResponseCode = 404;
            throw new Exception(
                sprintf(
                    _('Unsupported action "%s" for evidence "%s"'),
                    $action,
                    $this->getEvidence()
                ),
                $this
            );
        }

        return $result;
    }

    /**
     * Add External ID to Current Record
     *
     * @param string $extId ext:whatever:123 or simplay whatever:123
     *
     * @return array Insert result
     */
    public function addExternalID($extId)
    {
        return $this->insertToAbraFlexi([
            'id' => [
                $this->getRecordID(), 'ext:' . preg_replace(
                    '/^ext:/',
                    '',
                    $extId
                )
            ]
        ]);
    }

    /**
     * Change Value of external id identified by selector. Add new if not exists
     *
     * @param string     $selector ext:$selector:$newValue
     * @param string|int $newValue string or number
     * @param string|int $forID    Other than current record id
     *
     * @return array operation result
     */
    public function changeExternalID($selector, $newValue, $forID = null)
    {
        $change['@removeExternalIds'] = 'ext:' . $selector . ':';
        $change['id'] = [
            is_null($forID) ? $this->getRecordID() : $forID,
            'ext:' . $selector . ':' . $newValue
        ];
        return $this->insertToAbraFlexi($change);
    }

    /**
     * Send all unsent Documents by eMail
     *
     * @url https://www.abraflexi.eu/api/dokumentace/ref/odesilani-mailem/
     *
     * @return bool http response code
     */
    public function sendUnsent()
    {
        $this->performRequest('automaticky-odeslat-neodeslane', 'PUT', 'xml');
        return $this->lastResponseCode == 202;
    }

    /**
     * @inheritDoc
     */
    public function setDataValue(string $columnName, $value)
    {
        if ($this->debug === true) {
            $columnInfo = $this->getColumnInfo($columnName);
            if ($columnInfo) {
                if (array_key_exists('maxLength', $columnInfo) && (mb_strlen((string) $value) > $columnInfo['maxLength'])) {
                    $this->addStatusMessage($value . ' is too long. Shorting to ' . $columnInfo['maxLength'] . ' characters', 'warning');
                    $value = substr($value, 0, intval($columnInfo['maxLength']));
                }
            }
        }
        return parent::setDataValue($columnName, $value);
    }
}
