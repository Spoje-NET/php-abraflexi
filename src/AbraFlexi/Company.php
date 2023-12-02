<?php

/**
 * AbraFlexi - Objekt Společnosti.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

use AbraFlexi\RW;

/**
 * Firmy/účetní jednotky
 *
 * @note Tato položka nemá dostupné položky evidence
 */
class Company extends RW
{
    /**
     * Základní namespace pro komunikaci s AbraFlexi.
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'companies';

    /**
     * Default Line Prefix.
     *
     * @var string
     */
    public $prefix = '/c';

    /**
     * Company.
     *
     * @var string
     */
    public $evidence = '';

    /**
     * Tato třída nepracuje sezvolenou firmou.
     *
     * @var string
     */
    public $company = '';

    /**
     * Key Column for this evidence
     * @var string
     */
    public $keyColumn = 'dbNazev';

    /**
     * AbraFlexi Company Class .
     *
     * @param string|array $init    company dbNazev or initial data
     * @param array        $options Connection settings override
     */
    public function __construct($init = null, $options = [])
    {
        if (is_string($init)) {
            $init = ['dbNazev' => $init];
        }
        parent::__construct($init, $options);
    }

    /**
     * Zinicializuje objekt dle daných dat. Možné hodnoty:
     *
     *  * ['dbNazev'=>'company']           - load company form AbraFlexi
     *  * 234                              - interní číslo záznamu k načtení
     *  * code:LOPATA                      - kód záznamu
     *  * BAGR                             - kód záznamu k načtení
     *  * ['id'=>24,'nazev'=>'hoblík']     - pole hodnot k předvyplnění
     *  * 743.json?relations=adresa,vazby  - část url s parametry k načtení
     *
     * @param mixed $init číslo/"(code:)kód"/(část)URI záznamu k načtení | pole hodnot k předvyplnění
     */
    public function processInit($init)
    {
        parent::processInit($init);
        if (is_array($init) && array_key_exists('dbNazev', $init) && $this->autoload) {
            $companyInfo = $this->getFlexiData('/c/' . $init['dbNazev']);
            if (is_array($companyInfo) && !array_key_exists('message', $companyInfo)) {
                $this->takeData(current($companyInfo));
            }
        }
    }

    /**
     * Vrací základní URL pro užitou evidenci
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $urlSuffix
     */
    public function getEvidenceURL($urlSuffix = null)
    {
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->evidence;
        }

        $url = $this->url . $this->prefix . '/' . $this->company;
        if (!empty($urlSuffix)) {
            $url .= (($urlSuffix[0] == '.') ? '' : '/') . $urlSuffix;
        }
        return $url;
    }

    /**
     * Gives you current ApiURL with given format suffix
     *
     * @param string $format json|html|xml|...
     *
     * @return string API URL for current record or object/evidence
     */
    public function getApiURL($format = null)
    {
        return dirname(parent::getApiURL($format));
    }

    /**
     * Vrací název evidence použité v odpovědích z AbraFlexi
     *
     * @return string
     */
    public function getResponseEvidence()
    {
        return 'company';
    }

    /**
     * Parse Raw AbraFlexi response in several formats
     *
     * @param string $responseRaw raw response body
     * @param string $format      Raw Response format json|xml|etc
     *
     * @return array
     */
    public function rawResponseToArray(string $responseRaw, string $format)
    {
        if (strstr($responseRaw, 'winstrom')) {
            $nsbackup = $this->nameSpace;
            $this->nameSpace = 'winstrom';
            $response = parent::rawResponseToArray($responseRaw, $format);
            $this->nameSpace = $nsbackup;
        } elseif ($responseRaw == 'ok') {
            $response = ['success' => true];
        } else {
            $response = parent::rawResponseToArray($responseRaw, $format);
        }
        return $response;
    }

    /**
     * Save company backup to file
     *
     * @param string $filename
     *
     * @return boolean was backup saved to file ?
     */
    public function saveBackupTo($filename)
    {
        $backupFile = fopen($filename, 'w+');
        $headersBackup = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept'] = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-winstrom-backup';
        \curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, false); // return content as a string from curl_exec
        \curl_setopt($this->curl, CURLOPT_FILE, $backupFile);
        $responseCode = $this->doCurlRequest(
            $this->evidenceUrlWithSuffix('backup'),
            'GET',
            'winstrom-backup'
        );
        fclose($backupFile);
        $this->defaultHttpHeaders = $headersBackup;
        $this->defaultHttpHeaders = $headersBackup;
        \curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); // return content as a string from curl_exec
        return $responseCode == 200;
    }

    /**
     * Restore company from given file
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/restore-backup/ Obnovení ze zálohy
     *
     * @param string $filename             *.winstrom-backup file
     * @param string $name                 Extra name for restored company
     * @param boolean $disableEet          Disable EET on restored company
     * @param boolean $disableAutoSendMail Dsable auto sending of all documents
     * @param boolean $disableWebHooks     Remove Registered webhooks
     *
     * @return boolean restore result
     */
    public function restoreBackupFrom(
        $filename,
        $name = null,
        $disableEet = false,
        $disableAutoSendMail = false,
        $disableWebHooks = false
    ) {
        $options = [];
        if (!empty($name)) {
            $options['name'] = $name;
        }
        if ($disableEet === true) {
            $options['disableEet'] = 1;
        }
        if ($disableAutoSendMail === true) {
            $options['disableAutoSendMail'] = 1;
        }
        if ($disableWebHooks === true) {
            $options['disableWebHooks'] = 1;
        }
        $headersBackup = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept'] = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-winstrom-backup';
        $this->setPostFields(file_get_contents($filename));
        $this->performRequest('restore' . (empty($options) ? '' : '?' . http_build_query($options) ), 'PUT');
        $this->defaultHttpHeaders = $headersBackup;
        return $this->lastResponseCode == 200;
    }

    /**
     * Create new company
     *
     * @param string $name
     *
     * @return boolean
     */
    public function createNew($name)
    {
        $this->performRequest('/admin/zalozeni-firmy?name=' . urlencode($name), 'PUT');
        return $this->lastResponseCode == 201;
    }

    /**
     * Obtain company identifier
     *
     * @return int|null company database name
     */
    public function getRecordID()
    {
        return $this->getDataValue('dbNazev');
    }

    /**
     * Company has no relations
     *
     * @return array
     */
    public function getVazby($bid = null)
    {
        throw new Exception(_('Company has no relations') . ' ' . strval($bid), $this);
    }

    /**
     * Smaže firmu ve AbraFlexi
     * Delete  company in AbraFlexi
     *
     * @param string $company identifikátor záznamu
     *
     * @return boolean Response code is 200 ?
     */
    public function deleteFromAbraFlexi($company = null)
    {
        if (is_null($company)) {
            $company = $this->getDataValue('dbNazev');
        }
        $this->performRequest('/c/' . $company . '.' . $this->format, 'DELETE');
        return $this->lastResponseCode == 200;
    }
}
