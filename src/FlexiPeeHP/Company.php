<?php
/**
 * FlexiPeeHP - Objekt Společnosti.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Firmy/účetní jednotky
 *
 * @note Tato položka nemá dostupné položky evidence
 */
class Company extends FlexiBeeRW
{
    /**
     * Základní namespace pro komunikaci s FlexiBEE.
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
     * FlexiBee Company Class .
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
     *  * ['dbNazev'=>'company']           - load company form FlexiBee
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
        if (is_array($init) && array_key_exists('dbNazev', $init)) {
            $companyInfo = $this->getFlexiData('/c/'.$init['dbNazev']);
            if (!array_key_exists('message', $companyInfo)) {
                $this->takeData(current($companyInfo));
            }
        }
    }

    /**
     * Vrací základní URL pro užitou evidenci
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $urlSuffix
     */
    public function getEvidenceURL($urlSuffix = null)
    {
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->evidence;
        }

        $url = $this->url.$this->prefix.'/'.$this->company;
        if (!empty($urlSuffix)) {
            $url .= (($urlSuffix[0] == '.') ? '' : '/').$urlSuffix;
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
     * Vrací název evidence použité v odpovědích z FlexiBee
     *
     * @return string
     */
    public function getResponseEvidence()
    {
        return 'company';
    }

    /**
     * Parse Raw FlexiBee response in several formats
     *
     * @param string $responseRaw raw response body
     * @param string $format      Raw Response format json|xml|etc
     *
     * @return array
     */
    public function rawResponseToArray($responseRaw, $format)
    {
        if (strstr($responseRaw, 'winstrom')) {
            $nsbackup        = $this->nameSpace;
            $this->nameSpace = 'winstrom';
            $response        = parent::rawResponseToArray($responseRaw, $format);
            $this->nameSpace = $nsbackup;
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
        $result                                   = false;
        $headersBackup                            = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept']       = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-winstrom-backup';
        $this->performRequest('backup', 'GET');
        $this->defaultHttpHeaders                 = $headersBackup;

        if ($this->lastResponseCode == 200) {
            if (file_put_contents($filename, $this->lastCurlResponse)) {
                $result = true;
            }
        }
        $this->defaultHttpHeaders = $headersBackup;
        return $result;
    }

    /**
     * Restore company from given file
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/restore-backup/ Obnovení ze zálohy
     *
     * @param string $filename             *.winstrom-backup file
     * @param string $name                 Extra name for restored company   
     * @param boolean $disableEet          Disable EET on restored company 
     * @param boolean $disableAutoSendMail Dsable auto sending of all documents 
     * @param boolean $disableWebHooks     Remove Registered webhooks 
     *
     * @return boolean restore result
     */
    public function restoreBackupFrom($filename, $name = null,
                                      $disableEet = false,
                                      $disableAutoSendMail = false,
                                      $disableWebHooks = false)
    {
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
        $headersBackup                            = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept']       = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-winstrom-backup';
        $this->setPostFields(file_get_contents($filename));
        $this->performRequest('restore'.(empty($options) ? '' : '?'.http_build_query($options) ),
            'PUT');
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
        $this->performRequest('/admin/zalozeni-firmy?name='.urlencode($name),
            'PUT');
        return $this->lastResponseCode == 201;
    }

    /**
     * Obtain company identifier
     *
     * @return string company database name
     */
    public function getRecordID()
    {
        return $this->getDataValue('dbNazev');
    }

    /**
     * Company has no relations
     *
     * @return null
     */
    public function getVazby($id = null)
    {
        throw new \Exception(_('Company has no relations'));
    }

    /**
     * Smaže firmu ve FlexiBee
     * Delete  company in FlexiBee
     *
     * @param string $company identifikátor záznamu
     * 
     * @return boolean Response code is 200 ?
     */
    public function deleteFromFlexiBee($company = null)
    {
        if (is_null($company)) {
            $company = $this->getDataValue('dbNazev');
        }
        $this->performRequest('/c/'.$company.'.'.$this->format, 'DELETE');
        return $this->lastResponseCode == 200;
    }
}
