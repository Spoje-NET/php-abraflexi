<?php

declare(strict_types=1);

/**
 * AbraFlexi - Read Only Access to AbraFlexi class.
 *
 * @author     Vítězslav Dvořák <vitezslav.dvorak@spojenet.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Základní třída pro čtení z AbraFlexi
 *
 * @url https://demo.flexibee.eu/devdoc/
 */
class RO extends \Ease\Sand
{
    use \Ease\RecordKey;

    /**
     * Object Name used for logging
     * @var string
     */
    public $objectName = null;

    /**
     * Where to get JSON files with evidence structure etc.
     * @var string
     */
    public static $infoDir = __DIR__ . '/../../static';

    /**
     * Version of AbraFlexi library
     *
     * @var string
     */
    public static $libVersion = '2.20';

    /**
     * Basic namespace for communication with AbraFlexi
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'winstrom';

    /**
     * URL of object data in AbraFlexi
     * @var string url
     */
    public $apiURL = null;

    /**
     * Data block in response field.
     *
     * @var string
     */
    public $resultField = 'results';

    /**
     * Communication protocol version used.
     *
     * @var string Verze použitého API
     */
    public $protoVersion = '1.0';

    /**
     * Evidence used by object
     *
     * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
     *
     * @var string
     */
    public $evidence = null;

    /**
     * Detaily evidence užité objektem
     *
     * @var array
     */
    public $evidenceInfo = [];

    /**
     * Default communication format.
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/format-types Přehled možných formátů
     *
     * @var string json|xml|...
     */
    public $format = 'json';

    /**
     * requested response format
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/format-types Přehled možných formátů
     *
     * @var string json|xml|...
     */
    public $responseFormat = 'json';

    /**
     * Curl Handle.
     *
     * @var resource|null
     */
    public $curl;

    /**
     * @link https://demo.flexibee.eu/devdoc/company-identifier Identifikátor firmy
     * @var string
     */
    public $company = null;

    /**
     * [protocol://]Server[:port]
     * @var string
     */
    public $url = null;

    /**
     * REST API Username
     * @var string
     */
    public $user = null;

    /**
     * REST API Password
     * @var string
     */
    public $password = null;

    /**
     * @var array Pole HTTP hlaviček odesílaných s každým požadavkem
     */
    public $defaultHttpHeaders = [];

    /**
     * Default additional request url parameters after question mark
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls   Common params
     * @link https://www.abraflexi.eu/api/dokumentace/ref/paging Paging params
     * @var array
     */
    public $defaultUrlParams = [];

    /**
     * Identifikační řetězec.
     *
     * @var string
     */
    public $init = null;

    /**
     * Sloupeček s názvem.
     *
     * @var string
     */
    public $nameColumn = 'nazev';

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
     * Klíčový idendifikátor záznamu.
     *
     * @var string
     */
    public $keyColumn = 'id';

    /**
     * Informace o posledním HTTP requestu.
     *
     * @var array|null
     */
    public $curlInfo;

    /**
     * Informace o poslední HTTP chybě.
     *
     * @var string
     */
    public $lastCurlError = null;

    /**
     * Used codes storage.
     *
     * @var array
     */
    public $codes = null;

    /**
     * Last Inserted ID.
     *
     * @var int
     */
    public $lastInsertedID = null;

    /**
     * Default Line Prefix.
     *
     * @var string
     */
    public $prefix = '/c/';

    /**
     * Raw Content of last curl response
     *
     * @var string
     */
    public $lastCurlResponse;

    /**
     * HTTP Response code of last request
     *
     * @var int
     */
    public $lastResponseCode = null;

    /**
     * Body data  for next curl POST operation
     *
     * @var string
     */
    public $postFields = null;

    /**
     * Last operation result data or message(s)
     *
     * @var array
     */
    public $lastResult = null;

    /**
     * Number from  @rowCount in response
     * @var int
     */
    public $rowCount = null;

    /**
     * Number from  @globalVersion
     * @var int
     */
    public $globalVersion = null;

    /**
     * @link https://www.abraflexi.eu/api/dokumentace/ref/zamykani-odemykani/
     * @var string filter query
     */
    public $filter;

    /**
     * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
     * @var string
     */
    protected $action;

    /**
     * Pole akcí které podporuje ta která evidence
     * @link https://demo.flexibee.eu/c/demo/faktura-vydana/actions.json Např. Akce faktury
     * @var array
     */
    public $actionsAvailable = null;

    /**
     * The List of known parameters was renamed to $urlParamsKnown
     *
     * @deprecated since version 2.23
     *
     * @var array
     */
    public $urlParams;

    /**
     * Parmetry pro URL
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls/ Všechny podporované parametry
     * @var array
     */
    public $urlParamsKnown = [
        'add-global-version' => ['type' => 'boolean', 'description' => 'The response will contain the global version number of the current export'],
        'add-row-count' => ['type' => 'boolean', 'description' => 'Adding Total Records to Output (Pagination)'],
        'as-gui' => ['type' => 'boolean', 'description' => 'Turns on functions that complement the GUI processing outputs'],
        'auth' => ['type' => 'string', 'description' => 'http: Forces login using HTTP authentication, for example, to change the default WUI login method. html: Force HTML form authentication. This can be useful to suppress automatic SSO authentication.'],
        'authSessionId' => ['type' => 'string', 'description' => 'Authentification Session ID'],
        'code-as-id' => ['type' => 'boolean', 'description' => 'If an object has unique code, it is also exported (except for the <code> element) as <id> code: ... </id>'],
        'code-in-response' => ['type' => 'boolean', 'description' => 'The response will contain not only ID and URL for each object, but also code.'],
        'delimeter' => ['type' => 'string', 'description' => 'Specifies the input / output file separator in CSV format.',
            'example' => ';'],
        'detail' => ['type' => 'string', 'description' => 'Definition of the level of detail'], //See: https://www.abraflexi.eu/api/dokumentace/ref/detail-levels
        'dir' => ['type' => 'string', 'description' => 'Sorting direction.', 'example' => 'desc'],
        'dry-run' => ['type' => 'boolean', 'description' => 'Test run (dry-run)'], // See: https://www.abraflexi.eu/api/dokumentace/ref/dry-run/
        'encoding' => ['type' => 'string', 'description' => 'Specifies the encoding of the input / output file in CSV format.'],
        'export-settings' => ['type' => 'boolean', 'description' => 'Export one extra entry with current settings at the beginning'],
        'fail-on-warning' => ['type' => 'boolean', 'description' => 'If a warning occurs, do not save a record (Data Validation)'],
        'filter' => ['type' => 'string', 'description' => 'filter results by this param'],
        'format' => ['type' => 'string', 'description' => 'One of the compiled XSL transforms will be applied to the output XML.'],
        'idUcetniObdobi' => ['type' => 'string', 'description' => ''], //See: https://www.abraflexi.eu/api/dokumentace/ref/stavy-uctu/
        'includes' => ['type' => 'string', 'description' => 'Include related detail level object ',
            'example' => 'faktura-vydana/stredisko'],
        'inDesktopApp' => ['type' => 'boolean', 'description' => 'Hide menu and navigation in html format'], // Note: Undocumented function (html only)
        'limit' => ['type' => 'integer', 'description' => 'number of requested results'],
        'mode' => ['type' => 'string', 'description' => 'Support for RubyOnRails',
            'example' => 'ruby'],
        'no-ext-ids' => ['type' => 'boolean', 'description' => 'The answer will not contain external identifiers (performance optimization)'],
        'no-http-errors' => ['type' => 'boolean', 'description' => 'If a 4xx error occurs while processing a request, the server sends 200 OK anyway'],
        'no-ids' => ['type' => 'boolean', 'description' => 'The response will not contain any primary identifiers (performance optimization). It only affects the main records.'],
        'only-ext-ids' => ['type' => 'boolean', 'description' => 'The primary key will not be exported, the <id> elements will only contain the external ID. Similar no-ids, but also affects subevidencies.'],
        'order' => ['type' => 'string', 'description' => 'Sorting records', 'example' => 'nazev@A'],
        'relations' => ['type' => 'string', 'description' => 'Adding session data (see detail levels) A session overview can be obtained for each record (/ relations).'],
        'report-lang' => ['type' => 'string', 'description' => 'The language in which to print the output when exporting to PDF',
            'example' => 'en'],
        'report-name' => ['type' => 'string', 'description' => 'The name of the printout when exporting to PDF',
            'example' => 'invoice'],
        'report-sign' => ['type' => 'string', 'description' => 'Whether the PDF should be exported electronically signed'],
        'skupina-stitku' => ['type' => 'string', 'description' => 'Enables grouping of labels when exporting by group (multiple labels)'],
        'sort' => ['type' => 'string', 'description' => 'Sorting records for ExtJS'],
        'start' => ['type' => 'integer', 'description' => 'Pagination'],
        'stitky-as-ids' => ['type' => 'boolean', 'description' => 'Labels will be exported and imported not as a code list but as a list of numeric IDs'],
        'use-ext-id' => ['type' => 'boolean', 'description' => 'If the object contains an external ESHOP or MY ID, use it as a bind.'],
        'use-internal-id' => ['type' => 'boolean', 'description' => 'In addition to the ref and showAs for objects, it also supplies an internalId attribute that contains the internal record ID'],
        'xpath' => ['type' => 'string', 'description' => 'Apply XPATH to result',
            'example' => '//winstrom/adresar/email/text()'] // See: https://www.abraflexi.eu/api/dokumentace/ref/xpath/
    ];

    /**
     * Session ID
     * @var string
     */
    public $authSessionId = null;

    /**
     * Token obtained during login procedure
     * @var string
     */
    public $refreshToken = null;

    /**
     * Save 404 results to log ?
     * @var boolean
     */
    protected $ignoreNotFound = false;

    /**
     * Array of errors caused by last request
     * @var array
     */
    protected $errors = [];

    /**
     * List of Error500 reports sent
     * @var array
     */
    private $reports = [];

    /**
     * Send Error500 Report to
     * @var string email address
     */
    public $reportRecipient = 'podpora@abraflexi.eu';

    /**
     * Last Request response stats
     * @var array
     */
    protected $responseStats = null;

    /**
     * Chained Objects
     * @var array
     */
    public $chained = [];

    /**
     * Load whole record when id is given ?
     *
     * @var boolean
     */
    public $autoload = true;

    /**
     * We Connect to server by default
     * @var boolean
     */
    public $offline = false;

    /**
     * Convert server data to its native types ? eg. nubmers to integer
     * You can disable it using setUp
     *
     * @var boolean
     */
    public $nativeTypes = true;

    /**
     * Override cURL timeout
     * @var int seconds
     */
    public $timeout = null;

    /**
     * Columns Info for serveral evidencies
     * @var array
     */
    private $columnsInfo = [];

    /**
     * Throw Exception in case of AbraFlexi error
     * @var boolean
     */
    public $throwException = true;

    /**
     * Class for read only interaction with AbraFlexi.
     *
     * @param mixed $init default record id or initial data. See processInit()
     * @param array $options Connection settings and other options override
     */
    public function __construct($init = null, $options = [])
    {
        $this->urlParams = & $this->urlParamsKnown; //Sync deprecated variable with current TODO: Remove in 2024
        $this->init = $init;
        parent::setObjectName();
        $this->setUp($options);
        $this->curlInit();
        if (!empty($init)) {
            $this->processInit($init);
        }
        $this->setObjectName(array_key_exists('objectName', $options) ? $options['objectName'] : null);
    }

    /**
     * Set internal Object name
     *
     * @param string $objectName
     *
     * @return string Jméno objektu
     */
    public function setObjectName($objectName = null)
    {
        return parent::setObjectName(is_null($objectName) ? ( empty($this->getRecordIdent()) ? $this->getObjectName() : $this->getRecordIdent() . '@' . $this->getObjectName() ) : $objectName);
    }

    /**
     * SetUp Object to be ready for work
     *
     * @param array $options Object Options ( user,password,authSessionId
     *                                        company,url,evidence,
     *                                        prefix,defaultUrlParams,debug,autoload
     *                                        detail,offline,filter,ignore404,nativeTypes
     *                                        timeout,companyUrl,ver,throwException
     */
    public function setUp(array $options = [])
    {
        if (array_key_exists('ver', $options)) {
            $this->protoVersion = $options['ver'];
            $this->prefix = 'v' . round($this->protoVersion) . '/c/';
        }
        if (array_key_exists('companyUrl', $options)) {
            $options = array_merge(
                self::companyUrlToOptions($options['companyUrl']),
                $options
            );
        }
        $this->setupProperty($options, 'company', 'ABRAFLEXI_COMPANY');
        $this->setupProperty($options, 'url', 'ABRAFLEXI_URL');
        $this->setupProperty($options, 'user', 'ABRAFLEXI_LOGIN');
        $this->setupProperty($options, 'password', 'ABRAFLEXI_PASSWORD');
        $this->setupProperty($options, 'authSessionId', 'ABRAFLEXI_AUTHSESSID');
        $this->setupProperty($options, 'timeout', 'ABRAFLEXI_TIMEOUT');
        $this->setupProperty($options, 'nativeTypes', 'ABRAFLEXI_NATIVE_TYPES');
        if (!empty($this->authSessionId)) {
            $this->defaultHttpHeaders['X-authSessionId'] = $this->authSessionId;
        }
        $this->setupProperty($options, 'defaultUrlParams');
        if (isset($options['prefix'])) {
            $this->setPrefix($options['prefix']);
        }
        if (array_key_exists('detail', $options)) {
            $this->defaultUrlParams['detail'] = $options['detail'];
        }
        $this->setupProperty($options, 'filter');
        if (array_key_exists('offline', $options)) {
            $this->offline = (bool) $options['offline'];
        }

        if (array_key_exists('ignore404', $options)) {
            $this->ignore404($options['ignore404']);
        }

        $this->setupProperty($options, 'throwException', 'ABRAFLEXI_EXCEPTIONS');
        $this->setupProperty($options, 'debug');
        $this->setupProperty($options, 'autoload');

        if (isset($options['evidence'])) {
            $this->setEvidence($options['evidence']);
        } elseif ($this->evidence) { // Use Defaut if specified
            $this->setEvidence($this->evidence);
        } else {
            $this->updateApiURL();
        }
    }

    /**
     * Convert companyUrl provided by CustomButton to options array
     *
     * @deprecated since version 2.24 - use Functions::companyUrlToOptions instead
     *
     * @param string $companyUrl
     *
     * @return array Options
     */
    public static function companyUrlToOptions(string $companyUrl)
    {
        return Functions::companyUrlToOptions($companyUrl);
    }

    /**
     * Get Current connection options for use in another object
     *
     * @return array usable as second constructor parameter
     */
    public function getConnectionOptions()
    {
        $conOpts = ['url' => $this->url];
        if (empty($this->authSessionId)) {
            $conOpts ['user'] = $this->user;
            $conOpts['password'] = $this->password;
        } else {
            $conOpts['authSessionId'] = $this->authSessionId;
        }
        $company = $this->getCompany();
        if (!empty($company)) {
            $conOpts['company'] = $company;
        }
        if (!is_null($this->timeout)) {
            $conOpts['timeout'] = $this->timeout;
        }
        return $conOpts;
    }

    /**
     * Export current/given configutation into Environment
     * @param array $opts
     */
    public function configToEnv(array $opts = [])
    {
        $options = empty($opts) ? $this->getConnectionOptions() : $opts;
        if (array_key_exists('url', $options)) {
            putenv('ABRAFLEXI_URL=' . $options['URL']);
        }
        if (array_key_exists('user', $options)) {
            putenv('ABRAFLEXI_LOGIN=' . $options['user']);
        }
        if (array_key_exists('password', $options)) {
            putenv('ABRAFLEXI_PASSWORD=' . $options['password']);
        }
        if (array_key_exists('company', $options)) {
            putenv('ABRAFLEXI_COMPANY=' . $options['company']);
        }
        if (array_key_exists('authSessionId', $options)) {
            putenv('ABRAFLEXI_AUTHSESSID=' . $options['authSessionId']);
        }
    }

    /**
     * Inicializace CURL
     *
     * @return boolean Online Status
     */
    public function curlInit()
    {
        if ($this->offline === false) {
            $this->curl = \curl_init(); // create curl resource
            \curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); // return content as a string from curl_exec
            \curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, true); // follow redirects (compatibility for future changes in AbraFlexi)
            \curl_setopt($this->curl, CURLOPT_HTTPAUTH, true);       // HTTP authentication
            \curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false); // AbraFlexi by default uses Self-Signed certificates
            \curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false);
            \curl_setopt($this->curl, CURLOPT_VERBOSE, ($this->debug === true)); // For debugging
            if (empty($this->authSessionId)) {
                \curl_setopt(
                    $this->curl,
                    CURLOPT_USERPWD,
                    $this->user . ':' . $this->password
                ); // set username and password
            }
            if (!is_null($this->timeout)) {
                \curl_setopt($this->curl, CURLOPT_HTTPHEADER, [
                    'Connection: Keep-Alive',
                    'Keep-Alive: ' . $this->timeout
                ]);
                \curl_setopt($this->curl, CURLOPT_TIMEOUT, $this->timeout);
            }

            \curl_setopt($this->curl, CURLOPT_USERAGENT, 'phpAbraFlexi  v' . self::$libVersion . ' https://github.com/Spoje-NET/php-abraflexi');
        }
        return !$this->offline;
    }

    /**
     * Zinicializuje objekt dle daných dat. Možné hodnoty:
     *
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
        if (is_integer($init) && $this->autoload) {
            $this->loadFromAbraFlexi($init);
        } elseif (is_array($init)) {
            $this->takeData($init);
        } elseif (!is_object($init) && preg_match('/\.(json|xml|csv)/', strval($init))) {
            $this->takeData($this->getFlexiData((($init[0] != '/') ? $this->evidenceUrlWithSuffix($init) : $init)));
        } else {
            if ($this->autoload === false) {
                $this->setMyKey($init);
            } else {
                $this->loadFromAbraFlexi($init);
            }
        }
    }

    /**
     * Set Data Field value
     *
     * @param string $columnName field name
     * @param mixed  $value      field data value
     *
     * @return bool Success
     */
    public function setDataValue(string $columnName, $value)
    {
        switch ($columnName) {
            case 'kod':
                $value = $value ? self::uncode($value) : ''; //Alwyas uncode "kod" column

            default:
                if (is_object($value)) {
                    switch (get_class($value)) {
                        case 'DateTime':
                            $columnInfo = $this->getColumnInfo($columnName);
                            switch ($columnInfo['type']) {
                                case 'date':
                                    $value = self::dateToFlexiDate($value);
                                    break;
                                case 'datetime':
                                    $value = self::dateToFlexiDateTime($value);
                                    break;
                            }
                            break;
                    }
                }
                $result = parent::setDataValue($columnName, $value);
                break;
        }
        return $result;
    }

    /**
     * Strip all non-identifier data
     *
     * @param array $keep  extra columns to be preserved
     *
     * @return RO Current object state
     */
    public function stripBody(array $keep = [])
    {
        $id = $this->getRecordID();
        $code = $this->getRecordCode();
        $extIds = $this->getExternalIDs();
        $restoreData = [];
        $originalData = $this->getData();
        foreach ($keep as $column) {
            \Ease\Functions::divDataArray($originalData, $restoreData, $column);
        }
        $this->dataReset();
        $this->setData($restoreData);
        $this->setMyKey($id);
        $columns = $this->getColumnsInfo();
        if (array_key_exists('kod', $columns)) {
            $this->setDataValue('kod', $code);
        }
        if (!empty($extIds)) {
            $this->setDataValue('external-ids', $columns);
        }
        return $this;
    }

    /**
     * PHP Date object to AbraFlexi date format
     *
     * @deprecated since version 2.24 - use Functions::dateToFlexiDate instead
     *
     * @param \DateTime $date
     */
    public static function dateToFlexiDate(\DateTime $date)
    {
        return Functions::dateToFlexiDate($date);
    }

    /**
     * PHP Date object to AbraFlexi date format
     *
     * @deprecated since version 2.24 - use Functions::dateToFlexiDateTime instead
     *
     * @param \DateTime $dateTime
     */
    public static function dateToFlexiDateTime(\DateTime $dateTime)
    {
        return Functions::dateToFlexiDateTime($dateTime);
    }

    /**
     * Set URL prefix
     *
     * @param string $prefix
     */
    public function setPrefix(string $prefix)
    {
        switch ($prefix) {
            case 'a': //Access
            case 'c': //Company
            case 'u': //User
            case 'g': //License Groups
            case 'admin':
            case 'status':
            case 'login-logout':
                $this->prefix = '/' . $prefix . '/';
                break;
            case null:
            case '':
            case '/':
                $this->prefix = '';
                break;
            default:
                throw new \Exception(sprintf('Unknown prefix %s', $prefix));
        }
    }

    /**
     * Set communication format.
     * One of html|xml|json|csv|dbf|xls|isdoc|isdocx|edi|pdf|pdf|vcf|ical
     *
     * @param string $format
     *
     * @return boolean format is availble
     */
    public function setFormat(string $format)
    {
        $result = true;
        if (($this->debug === true) && !empty($this->evidence) && isset(Formats::$$this->evidence)) {
            if (array_key_exists($format, array_flip(Formats::$$this->evidence)) === false) {
                $result = false;
            }
        }
        if ($result === true) {
            $this->format = $format;
            $this->updateApiURL();
        }
        return $result;
    }

    /**
     * Nastaví Evidenci pro Komunikaci.
     * Set evidence for communication
     *
     * @param string $evidence evidence pathName to use
     *
     * @return boolean evidence switching status
     */
    public function setEvidence(string $evidence)
    {
        switch ($this->prefix) {
            case '/c/':
                if ($this->debug === true) {
                    if (array_key_exists($evidence, EvidenceList::$name)) {
                        $this->evidence = $evidence;
                        $result = true;
                    } else {
                        throw new \Exception(sprintf(
                            'Try to set unsupported evidence %s',
                            $evidence
                        ));
                    }
                } else {
                    $this->evidence = $evidence;
                    $result = true;
                }
                break;
            default:
                $this->evidence = $evidence;
                $result = true;
                break;
        }
        $this->updateApiURL();
        $this->evidenceInfo = $this->getEvidenceInfo();
        return $result;
    }

    /**
     * Vrací právě používanou evidenci pro komunikaci
     * Obtain current used evidence
     *
     * @return string
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Set used company.
     * Nastaví Firmu.
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Obtain company now used
     * Vrací právě používanou firmu
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Vrací název evidence použité v odpovědích z AbraFlexi
     *
     * @return string
     */
    public function getResponseEvidence()
    {
        switch ($this->evidence) {
            case 'c':
                $evidence = 'company';
                break;
            case 'evidence-list':
                $evidence = 'evidence';
                break;
            default:
                $evidence = $this->getEvidence();
                break;
        }
        return $evidence;
    }

    /**
     * Převede rekurzivně Objekt na pole.
     *
     * @deprecated since version 2.24 - use Functions::object2array instead
     *
     * @param object|array $object
     *
     * @return array
     */
    public static function object2array($object)
    {
        return Functions::object2array($object);
    }

    /**
     * Převede rekurzivně v poli všechny objekty na jejich identifikátory.
     *
     * @deprecated since version 2.24 - use Functions::objectToID instead
     *
     * @param object|array $object
     *
     * @return array
     */
    public static function objectToID($object)
    {
        return Functions::objectToID($object);
    }

    /**
     * Return basic URL for used Evidence
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls/ Sestavování URL
     *
     * @return string Evidence URL
     */
    public function getEvidenceURL()
    {
        $evidenceUrl = $this->url . $this->prefix . $this->company;
        $evidence = $this->getEvidence();
        if (!empty($evidence)) {
            $evidenceUrl .= '/' . $evidence;
        }
        return $evidenceUrl;
    }

    /**
     * Add suffix to Evidence URL
     *
     * @param string $urlSuffix
     *
     * @return string
     */
    public function evidenceUrlWithSuffix($urlSuffix)
    {
        $evidenceUrl = $this->getEvidenceUrl();
        if (!empty($urlSuffix)) {
            if (($urlSuffix[0] != '/') && ($urlSuffix[0] != ';') && ($urlSuffix[0] != '?')) {
                $evidenceUrl .= '/';
            }
            $evidenceUrl .= $urlSuffix;
        }
        return $evidenceUrl;
    }

    /**
     * Update $this->apiURL
     */
    public function updateApiURL()
    {
        $this->apiURL = $this->getEvidenceURL();
        $rowIdentifier = $this->getRecordIdent();
        if (empty($rowIdentifier)) {
            $rowIdentifier = $this->getRecordCode();
            if (empty($rowIdentifier)) {
                $rowIdentifier = $this->getExternalID();
            }
        }
        if (!empty($rowIdentifier)) {
            $this->apiURL .= '/' . self::urlEncode(strval($rowIdentifier));
        }
        $this->apiURL .= '.' . $this->format;
    }

    /*
     * Add Default Url params to given url if not overrided
     *
     * @param string $urlRaw
     *
     * @return string url with default params added
     */

    public function addDefaultUrlParams(string $urlRaw)
    {
        return \Ease\Functions::addUrlParams(
            $urlRaw,
            $this->defaultUrlParams,
            false
        );
    }

    /**
     * Funkce, která provede I/O operaci a vyhodnotí výsledek.
     *
     * @param string $urlSuffix část URL za identifikátorem firmy.
     * @param string $method    HTTP/REST metoda
     * @param string $format    Requested format
     *
     * @return array|boolean Výsledek operace
     */
    public function performRequest(
        string $urlSuffix = '',
        string $method = 'GET',
        $format = null
    ) {
        $this->rowCount = null;
        $this->responseStats = [];
        $this->errors = [];
        if (preg_match('/^http/', $urlSuffix)) {
            $url = $urlSuffix;
        } elseif (strlen($urlSuffix) && ($urlSuffix[0] == '/')) {
            $url = $this->url . $urlSuffix;
        } else {
            $url = $this->evidenceUrlWithSuffix($urlSuffix);
        }

        $responseCode = $this->doCurlRequest(
            $this->addDefaultUrlParams($url),
            $method,
            $format
        );
        return $this->lastCurlResponse ? $this->parseResponse($this->rawResponseToArray(
            strval($this->lastCurlResponse),
            $this->responseFormat
        ), $responseCode) : false;
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
        $responseDecoded = [];
        if (!empty(trim($responseRaw))) {
            switch ($format) {
                case 'json':
                    $responseDecoded = $this->rawJsonToArray($responseRaw);
                    break;
                case 'xml':
                    $responseDecoded = ($this->lastCurlResponse[0] == '<') ? $this->rawXmlToArray($this->lastCurlResponse) : ['message' => $this->lastCurlResponse];
                    break;
                case 'txt':
                default:
                    $responseDecoded = [$this->lastCurlResponse];
                    break;
            }
        }
        return $responseDecoded;
    }

    /**
     * Fix field types in AbraFlexi server response
     *
     * @param array $response raw response
     *
     * @return array types resolved
     */
    public function fixResponseTypes(array $response)
    {
        foreach ($response as $evidence => $records) {
            if (array_key_exists($evidence, EvidenceList::$evidences)) {
                foreach ($records as $recordId => $record) {
                    $response[$evidence][$recordId] = $this->fixRecordTypes($record, $evidence);
                }
            }
        }
        return $response;
    }

    /**
     * Fix AbraFlexi record field types
     *
     * @param array $record
     *
     * @param string $evidence force other than current
     *
     * @return array with items typed
     *
     * @throws \Ease\Exception
     */
    public function fixRecordTypes(array $record, $evidence = null)
    {
        foreach ($record as $column => $value) {
            if ($column && !strstr($column, '@')) {
                $columnInfo = $this->getColumnInfo($column, $evidence);
                if (is_null($columnInfo)) {
                    if ($this->debug === true) {
                        $this->addStatusMessage(sprintf(_('Unknown response field %s. (Please update library or static definitions)'), $column . '@' . $evidence), 'debug');
                    }
                } else {
                    switch ($columnInfo['type']) {
                        case 'logic':
                            $record[$column] = is_bool($value) ? $value : $value === 'true';
                            break;
                        case 'relation':
                            $record[$column] = new Relation(
                                $value,
                                array_key_exists('fkEvidencePath', $columnInfo) && !is_null($columnInfo['fkEvidencePath']) ? $columnInfo['fkEvidencePath'] : $column,
                                array_key_exists($column . '@ref', $record) ? $record[$column . '@ref'] : null,
                                array_key_exists($column . '@showAs', $record) ? $record[$column . '@showAs'] : null
                            );
                            unset($record[$column . '@ref']);
                            unset($record[$column . '@showAs']);
                            break;
                        case 'relations':
                            $record[$column] = $value;
                            break;
                        case 'select':
                        case 'string':
                            $record[$column] = is_array($value) ? implode("\n", $value) : strval($value);
                            break;
                        case 'integer':
                            $record[$column] = intval($value);
                            break;
                        case 'numeric':
                            $record[$column] = floatval($value);
                            break;
                        case 'datetime':
                            $record[$column] = new DateTime($value);
                            break;
                        case 'date':
                            $record[$column] = new Date($value);
                            break;
                        case 'blob':
                            break;
                        default:
                            throw new \Ease\Exception(sprintf(_('Unknown response field %s type: %s. (Please update library or static definitions)'), $column . '@' . $evidence, $columnInfo['type']));
                    }
                }
            }
        }
        return $record;
    }

    /**
     * Convert AbraFlexi Response JSON to Array
     *
     * @param string $rawJson
     *
     * @return array
     */
    public function rawJsonToArray($rawJson)
    {
        $responseDecoded = json_decode($rawJson, true, 10);
        $decodeError = json_last_error_msg();
        if ($decodeError == 'No error') {
            if (array_key_exists($this->nameSpace, $responseDecoded)) {
                $responseDecoded = $this->nativeTypes ? $this->fixResponseTypes($responseDecoded[$this->nameSpace]) : $responseDecoded[$this->nameSpace];
            }
        } else {
            if ($this->throwException == true) {
                throw new Exception('JSON Decoder: ' . $decodeError, $this);
            } else {
                $this->addStatusMessage('JSON Decoder: ' . $decodeError, 'error');
                $this->addStatusMessage($rawJson, 'debug');
            }
        }
        return $responseDecoded;
    }

    /**
     * Convert AbraFlexi Response XML to Array
     *
     * @param string $rawXML
     *
     * @return array
     */
    public function rawXmlToArray($rawXML)
    {
        return $this->fixResponseTypes(self::xml2array($rawXML));
    }

    /**
     * Parse Response array
     *
     * @param array|string $responseDecoded
     * @param int          $responseCode     Request Response Code
     *
     * @return array main data part of response
     */
    public function parseResponse($responseDecoded, $responseCode)
    {
        $mainResult = null;
        switch ($responseCode) {
            case 201: //We do not care about Success Write here
            case 202: //Accept eg. unsent mails sent
                break;
            case 200: //Success Read
                if (is_array($responseDecoded)) {
                    if (isset($responseDecoded['@rowCount'])) {
                        $this->rowCount = (int) $responseDecoded['@rowCount'];
                    }
                    if (isset($responseDecoded['@globalVersion'])) {
                        $this->globalVersion = (int) $responseDecoded['@globalVersion'];
                    }

                    $mainResult = $this->unifyResponseFormat($responseDecoded);
                    if (array_key_exists('stats', $responseDecoded)) {
                        $this->responseStats = $responseDecoded['stats'];
                    } elseif (!empty($mainResult)) {
                        if (array_key_exists('success', $mainResult) && ($mainResult['success'] == 'false')) {
                            $this->responseStats = ['read' => 0];
                        } elseif (array_key_exists('properties', $mainResult)) {
                            $this->responseStats = ['read' => 1];
                        } else {
                            $responseEvidence = $this->getResponseEvidence();
                            if (!empty($this->rowCount)) {
                                $this->responseStats = ['read' => $this->rowCount];
                            } elseif (
                                    array_key_exists(
                                        $responseEvidence,
                                        $mainResult
                                    )
                            ) {
                                $this->responseStats = ['read' => count($mainResult[$responseEvidence])];
                            } else {
                                $this->responseStats = ['read' => count($mainResult)];
                            }
                        }
                    }
                } else {
                    $mainResult = $responseDecoded;
                }

                $this->lastResult = $mainResult;
                break;
            case 500: // Internal Server Error
                if ($this->debug === true) {
                    $this->error500Reporter($responseDecoded);
                }
            case 401:
                $msg = (array_key_exists('message', $responseDecoded) ? $responseDecoded['message'] : $responseDecoded[key($responseDecoded)]['message']) . ' for ' . $this->getApiURL();
                $this->addStatusMessage($msg, 'error');
                if ($this->throwException) {
                    throw new Exception($msg, $this);
                }
                break;
            case 404: // Page not found
                if ($this->ignoreNotFound === true) {
                    break;
                }
            case 400: //Bad Request parameters
            default: //Something goes wrong
                if (!empty($responseDecoded) && is_array($responseDecoded)) {
                    $this->parseError($responseDecoded);
                }
                if ($this->throwException) {
                    $errors = $this->getErrors();
                    throw new Exception(empty($errors) ? 'Problem ' : (is_array($errors[0]) ? $errors[0]['message'] : $errors[0] ), $this);
                } else {
                    $this->addStatusMessage($this->lastResponseCode . ': ' . $this->curlInfo['url'] . ' (' . $this->format . ') ' . json_encode($this->getErrors()), 'warning');
                }
                break;
        }
        return $mainResult;
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
        if (array_key_exists('success', $responseDecoded)) {
            $this->errors = [['message' => array_key_exists('message', $responseDecoded) ? $responseDecoded['message'] : '']];
        } else {
            $this->addStatusMessage('Unparsed error: ' . $this->lastCurlResponse, 'error');
        }
        return count($this->errors);
    }

    /**
     * Vykonej HTTP požadavek
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $url    URL požadavku
     * @param string $method HTTP Method GET|POST|PUT|OPTIONS|DELETE
     * @param string $format požadovaný formát komunikace
     *
     * @return int HTTP Response CODE
     */
    public function doCurlRequest($url, $method, $format = null)
    {
        if (is_null($format)) {
            $format = $this->format;
        }
        curl_setopt($this->curl, CURLOPT_URL, $url);
// Nastavení samotné operace
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));
//Vždy nastavíme byť i prázná postdata jako ochranu před chybou 411
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->postFields);
        $httpHeaders = $this->defaultHttpHeaders;
        $formats = Formats::bySuffix();
        if (!isset($httpHeaders['Accept'])) {
            $httpHeaders['Accept'] = $formats[$format]['content-type'];
        }
        if (!isset($httpHeaders['Content-Type'])) {
            $httpHeaders['Content-Type'] = $formats[$format]['content-type'];
        }

        array_walk($httpHeaders, function (&$value, $header) {
            $value = $header . ': ' . $value;
        });
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $httpHeaders);
// Proveď samotnou operaci
        $this->lastCurlResponse = curl_exec($this->curl);
        $this->curlInfo = curl_getinfo($this->curl);
        $this->curlInfo['when'] = microtime();
        $this->responseFormat = $this->contentTypeToResponseFormat(strval($this->curlInfo['content_type']), $url);
        $this->lastResponseCode = $this->curlInfo['http_code'];
        $this->lastCurlError = curl_error($this->curl);
        if (strlen($this->lastCurlError)) {
            $msg = sprintf('Curl Error (HTTP %d): %s', $this->lastResponseCode, $this->lastCurlError);
            $this->addStatusMessage($msg, 'error');
            if ($this->throwException) {
                throw new Exception($msg, $this);
            }
        }

        if ($this->debug === true) {
            $this->saveDebugFiles();
        }
        return $this->lastResponseCode;
    }

    /**
     * Obtain json for application/json
     *
     * @param string $contentType
     * @param string $url
     *
     * @return string response format
     */
    public function contentTypeToResponseFormat(string $contentType, $url = null)
    {
        if (!empty($url)) {
            $url = parse_url($url, PHP_URL_PATH);
        }

        $contentTypeClean = strstr($contentType, ';') ? substr(
            $contentType,
            0,
            strpos($contentType, ';')
        ) : $contentType;
        switch ($url) {
            case '/login-logout/login';
                $responseFormat = 'json';
                break;
            default:
                switch ($contentTypeClean) {
                    case 'text/javascript':
                        $responseFormat = 'js';
                        break;
                    default:
                        $responseFormat = Formats::contentTypeToSuffix($contentTypeClean);
                        break;
                }
                break;
        }

        return $responseFormat;
    }

    /**
     * Nastaví druh prováděné akce.
     *
     * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
     * @param string $action
     *
     * @return boolean
     */
    public function setAction(string $action)
    {
        $result = false;
        $actionsAvailable = $this->getActionsInfo();
        if (
                is_array($actionsAvailable) && array_key_exists(
                    $action,
                    $actionsAvailable
                )
        ) {
            $this->action = $action;
            $result = true;
        }
        return $result;
    }

    /**
     * Convert XML to array.
     *
     * @deprecated since version 2.24 - use Functions::xml2array instead
     *
     * @param string $xml
     *
     * @return array
     */
    public static function xml2array($xml)
    {
        return Functions::xml2array($xml);
    }

    /**
     * Odpojení od AbraFlexi.
     */
    public function disconnect()
    {
        if (is_null($this->curl) === false) {
            curl_close($this->curl);
        }
        unset($this->curl);
    }

    /**
     * Reset Curl Connection
     */
    public function connectionReset()
    {
        $this->disconnect();
        $this->curlInit();
    }

    /**
     * Disconnect CURL befere pass away
     */
    public function __destruct()
    {
        $this->disconnect();
    }

    /**
     * Načte řádek dat z AbraFlexi.
     *
     * @param int $recordID id požadovaného záznamu
     *
     * @return array
     */
    public function getFlexiRow($recordID)
    {
        $record = null;
        $response = $this->performRequest($this->evidence . '/' . $recordID . '.json');
        if (isset($response[$this->evidence])) {
            $record = $response[$this->evidence][0];
        }

        return $record;
    }

    /**
     * Oddělí z pole podmínek ty jenž patří za ? v URL požadavku
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/urls/ Sestavování URL
     *
     * @param array $conditions pole podmínek   - rendrují se do ()
     * @param array $urlParams  pole parametrů  - rendrují za ?
     */
    public function extractUrlParams(&$conditions, &$urlParams)
    {
        foreach (array_keys($this->urlParamsKnown) as $urlParam) {
            if (isset($conditions[$urlParam])) {
                \Ease\Functions::divDataArray($conditions, $urlParams, $urlParam);
            }
        }
    }

    /**
     * convert unicode to entities for use with AbraFlexi queries
     *
     * @deprecated since version 2.24 - use Functions::urlEncode instead
     *
     * @param string $urlRaw
     *
     * @return string
     */
    public static function urlEncode(string $urlRaw)
    {
        return Functions::urlEncode($urlRaw);
    }

    /**
     * Načte data z AbraFlexi.
     *
     * @param string $suffix     dotaz
     * @param string|array       $conditions Custom filters or modifiers
     *
     * @return array Data obtained
     */
    public function getFlexiData(string $suffix = '', $conditions = null)
    {
        $finalUrl = '';
        $evidenceToRestore = null;
        $urlParams = $this->defaultUrlParams;
        if (!empty($conditions)) {
            if (is_array($conditions)) {
                $this->extractUrlParams($conditions, $urlParams);
                if (array_key_exists('evidence', $conditions) && is_null($this->getColumnInfo('evidence'))) {
                    $evidenceToRestore = $this->getEvidence();
                    $this->setEvidence($conditions['evidence']);
                    unset($conditions['evidence']);
                }
                $conditions = $this->flexiUrl($conditions);
            }

            if (strlen($conditions) && ($conditions[0] != '/')) {
                $conditions = '(' . self::urlEncode($conditions) . ')';
            }
        }

        if (strlen($suffix) && ($suffix != '$sum')) {
            if (preg_match('/^http/', $suffix) || ($suffix[0] == '/') || is_numeric($suffix)) {
                $finalUrl = $suffix;
            } else {
                if (preg_match('/^(code|ext):(.*)/', $suffix)) {
                    $finalUrl = self::urlizeId($suffix);
                } else {
                    $finalUrl = $suffix;
                }
            }
        }

        $finalUrl .= $conditions;
        if ($suffix == '$sum') {
            $finalUrl .= '/$sum';
        }

        if (!empty($urlParams)) {
            if (strstr($finalUrl, '?')) {
                $finalUrl .= '&';
            } else {
                $finalUrl .= '?';
            }
            $finalUrl .= http_build_query(array_map(function ($a) {
                        return is_bool($a) ? ($a ? 'true' : 'false' ) : $a;
            }, $urlParams), '', '&', PHP_QUERY_RFC3986);
        }

        $transactions = $this->performRequest($finalUrl, 'GET');
        $responseEvidence = $this->getResponseEvidence();
        if (
                is_array($transactions) && array_key_exists(
                    $responseEvidence,
                    $transactions
                )
        ) {
            $result = $transactions[$responseEvidence];
            if ((count($result) == 1) && empty(current($result))) {
                $result = []; // Response is empty Array
            }
        } else {
            $result = $transactions;
        }
        if (!is_null($evidenceToRestore)) {
            $this->setEvidence($evidenceToRestore);
        }
        return $result;
    }

    /**
     * Načte záznam z AbraFlexi a uloží v sobě jeho data
     * Read AbraFlexi record and store it inside od object
     *
     * @param int|string|array $id ID or conditions
     *
     * @return int počet načtených položek
     */
    public function loadFromAbraFlexi($id = null)
    {
        $data = [];
        if (is_null($id)) {
            $id = $this->getMyKey();
        }

        $flexidata = $this->getFlexiData($this->getEvidenceUrl() . '/' . (is_array($id) ? '' : self::urlizeId($id)), (is_array($id) ? $id : ''));
        if ($this->lastResponseCode == 200) {
            $this->apiURL = $this->curlInfo['url'];
            if (is_array($flexidata) && (count($flexidata) == 1) && is_array(current($flexidata))) {
                $data = current($flexidata);
            }
        }
        return $this->takeData($data);
    }

    /**
     * Reload current record from AbraFlexi
     *
     * @return boolean
     */
    public function reload()
    {
        $id = $this->getRecordIdent();
        $this->dataReset();
        $this->loadFromAbraFlexi($id);
        return $this->lastResponseCode == 200;
    }

    /**
     * Set Filter code for requests
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/zamykani-odemykani/
     *
     * @param array|string $filter filter formula or ['key'=>'value']
     *
     * @return string Filter code
     */
    public function setFilter($filter)
    {
        return $this->filter = is_array($filter) ? self::flexiUrl($filter) : $filter;
    }

    /**
     * Převede data do Json formátu pro AbraFlexi.
     * Convert data to AbraFlexi like Json format
     *
     * @url https://www.abraflexi.eu/api/dokumentace/ref/actions/
     * @url https://www.abraflexi.eu/api/dokumentace/ref/zamykani-odemykani/
     *
     * @param array $data    object data
     * @param int   $options json_encode options like JSON_PRETTY_PRINT etc
     *
     * @return string
     */
    public function getJsonizedData($data = null, $options = 0)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        $dataToJsonize = array_merge(
            ['@version' => $this->protoVersion],
            $this->getDataForJSON($data)
        );
        $evidence = $this->getEvidence();
        if (
                $evidence &&
                array_key_exists($evidence, $dataToJsonize) &&
                array_key_exists('external-ids', $dataToJsonize[$evidence])
        ) {
            if (is_array($dataToJsonize[$evidence]['external-ids'])) {
                $dataToJsonize[$evidence]['external-ids'] = array_values($dataToJsonize[$evidence]['external-ids']);
            }
        }
        $jsonRaw = json_encode(
            [$this->nameSpace => $dataToJsonize],
            $options
        );
        return $jsonRaw;
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

        $dataForJson = [$this->getEvidence() => $this->objectToID($data)];
        if (!is_null($this->action)) {
            $dataForJson[$this->evidence . '@action'] = $this->action;
            $this->action = null;
        }

        if (!is_null($this->filter)) {
            $dataForJson[$this->evidence . '@filter'] = $this->filter;
        }


        foreach ($this->chained as $chained) {
            $chainedData = $chained->getDataForJSON();
            foreach ($chainedData as $chainedItemEvidence => $chainedItemData) {
                if (array_key_exists($chainedItemEvidence, $dataForJson)) {
                    if (is_string(key($dataForJson[$chainedItemEvidence]))) {
                        $dataBackup = $dataForJson[$chainedItemEvidence];
                        $dataForJson[$chainedItemEvidence] = [];
                        $dataForJson[$chainedItemEvidence][] = $dataBackup;
                    }
                    if (array_key_exists(0, $chainedItemData)) {
                        foreach ($chainedItemData as $chainedItem) {
                            $dataForJson[$chainedItemEvidence][] = $chainedItem;
                        }
                    } else {
                        $dataForJson[$chainedItemEvidence][] = $chainedItemData;
                    }
                } else {
                    $dataForJson[$chainedItemEvidence] = $chainedItemData;
                }
            }
        }


        return $dataForJson;
    }

    /**
     * Join another Flexi Object
     *
     * @param RO $object
     *
     * @return boolean adding to stack success
     */
    public function join(&$object)
    {
        $result = true;
        if (method_exists($object, 'getDataForJSON')) {
            $this->chained[] = $object;
        } else {
            throw new \Ease\Exception('$object->getDataForJSON() does not exist');
        }

        return $result;
    }

    /**
     * Prepare record ID to use in URL
     *
     * @deprecated since version 2.24 - use Functions::urlizeId instead
     *
     * @param mixed $id
     *
     * @return string id ready for use in URL
     */
    public static function urlizeId($id)
    {
        return Functions::urlizeId($id);
    }

    /**
     * Test if given record ID exists in AbraFlexi.
     *
     * @deprecated since version 2.25 - use recordExists() instead
     *
     * @param mixed $identifer presence state
     *
     * @return boolean
     */
    public function idExists($identifer = null)
    {
        if (is_null($identifer)) {
            $identifer = $this->getMyKey();
        }
        $ignorestate = $this->ignore404();
        $this->ignore404(true);
        $cands = $this->getFlexiData(
            '',
            [
                    'detail' => 'custom:' . $this->getKeyColumn(),
                    $this->getKeyColumn() => $identifer
                ]
        );
        $this->ignore404($ignorestate);
        return ($this->lastResponseCode == 200) && !empty($cands);
    }

    /**
     * Test if given record exists in AbraFlexi.
     *
     * @param array|string|int $data ext:id:23|code:ITEM|['id'=>23]|23
     *
     * @return boolean Record presence status
     */
    public function recordExists($data = [])
    {

        if (empty($data)) {
            $data = $this->getData();
        }
        $ignorestate = $this->ignore404();
        $this->ignore404(true);
        $keyColumn = $this->getKeyColumn();
        $res = $this->getColumnsFromAbraFlexi(
            [$keyColumn],
            is_array($data) ? $data : [$keyColumn => $data]
        );
        if (empty($res) || (isset($res['success']) && ($res['success'] == 'false')) || ((isset($res) && is_array($res)) && !isset($res[0]) )) {
            $found = false;
        } else {
            $found = true;
        }
        $this->ignore404($ignorestate);
        return $found;
    }

    /**
     * Vrací z AbraFlexi sloupečky podle podmínek.
     *
     * @param array|int|string $conditions pole podmínek nebo ID záznamu
     * @param string           $indexBy    klice vysledku naplnit hodnotou ze
     *                                     sloupečku
     * @return array
     */
    public function getAllFromAbraFlexi($conditions = null, $indexBy = null)
    {
        if (is_int($conditions)) {
            $conditions = [$this->getmyKeyColumn() => $conditions];
        }

        $flexiData = $this->getFlexiData('', $conditions);
        if (!is_null($indexBy)) {
            $flexiData = \Ease\Functions::reindexArrayBy($flexiData);
        }

        return $flexiData;
    }

    /**
     * Vrací z AbraFlexi sloupečky podle podmínek.
     *
     * @param string|string[] $columnsList seznam položek nebo úrověň detailu: id|summary|full
     * @param array           $conditions  pole podmínek nebo ID záznamu
     * @param string          $indexBy     Sloupeček podle kterého indexovat záznamy
     *
     * @return array
     */
    public function getColumnsFromAbraFlexi(
        $columnsList,
        $conditions = [],
        $indexBy = null
    ) {
        $detail = 'full';
        switch (gettype($columnsList)) {
            case 'integer': //Record ID
                $conditions = [$this->getmyKeyColumn() => $conditions];
            case 'array': //Few Conditions
                if (
                        !is_null($indexBy) && !array_key_exists(
                            $indexBy,
                            $columnsList
                        )
                ) {
                    $columnsList[] = $indexBy;
                }
                $columns = implode(',', array_unique($columnsList));
                $detail = 'custom:' . $columns;
            default:
                switch ($columnsList) {
                    case 'id':
                        $detail = 'id';
                        break;
                    case 'summary':
                        $detail = 'summary';
                        break;
                    default:
                        break;
                }
                break;
        }

        $conditions['detail'] = $detail;
        $flexiData = $this->getFlexiData('', $conditions);
        if (
                is_string($indexBy) && is_array($flexiData) && array_key_exists(
                    0,
                    $flexiData
                ) && array_key_exists($indexBy, $flexiData[0])
        ) {
            $flexiData = \Ease\Functions::reindexArrayBy($flexiData, $indexBy);
        }

        return $flexiData;
    }

    /**
     * Vrací kód záznamu.
     * Obtain record CODE
     *
     * @deprecated since version 2.25 - do not use at all
     *
     * @param mixed $data
     *
     * @return string
     */
    public function getKod($data = null, $unique = true)
    {
        $kod = null;
        if (is_null($data)) {
            $data = $this->getData();
        }

        if (is_string($data)) {
            $data = [$this->nameColumn => $data];
        }

        if (isset($data['kod'])) {
            $kod = $data['kod'];
        } else {
            if (isset($data[$this->nameColumn])) {
                $kod = preg_replace(
                    '/[^a-zA-Z0-9]/',
                    '',
                    \Ease\Functions::rip($data[$this->nameColumn])
                );
            } else {
                if (isset($data[$this->keyColumn])) {
                    $kod = \Ease\Functions::rip($data[$this->keyColumn]);
                }
            }
            $kod = substr($kod, 0, 20);
        }

        if (!strlen($kod)) {
            $kod = 'NOTSET';
        }

        if (strlen($kod) > 18) {
            $kodfinal = strtoupper(substr($kod, 0, 18));
        } else {
            $kodfinal = strtoupper($kod);
        }

        if ($unique) {
            $counter = 0;
            if (!empty($this->codes) && count($this->codes)) {
                foreach ($this->codes as $codesearch => $keystring) {
                    if (strstr($codesearch, $kodfinal)) {
                        ++$counter;
                    }
                }
            }
            if ($counter) {
                $kodfinal = $kodfinal . $counter;
            }

            $this->codes[$kodfinal] = $kod;
        }

        return self::code($kodfinal);
    }

    /**
     * Save RAW Curl Request & Response to files in Temp directory
     */
    public function saveDebugFiles()
    {
        $tmpdir = sys_get_temp_dir();
        $fname = $this->evidence . '-' . $this->curlInfo['when'] . '.' . $this->format;
        $reqname = $tmpdir . '/request-' . $fname;
        $respname = $tmpdir . '/response-' . $fname;
        $header = '# ' . (new \DateTime())->format('Y-m-d\TH:i:s.u') . ' ' . $this->curlInfo['url'] . ' (' . urldecode($this->curlInfo['url']) . ')';
        if (file_put_contents($reqname, $header . "\n" . $this->postFields)) {
            $this->addStatusMessage($reqname, 'debug');
        }
        if (file_put_contents($respname, $header . "\n" . $this->lastCurlResponse)) {
            $this->addStatusMessage($respname, 'debug');
        }
    }

    /**
     * Připraví data pro odeslání do AbraFlexi
     *
     * @param string $data
     */
    public function setPostFields($data)
    {
        $this->postFields = $data;
    }

    /**
     * Get Content ready to be send as POST body
     * @return string
     */
    public function getPostFields()
    {
        return $this->postFields;
    }

    /**
     * Prepare "IN" subselect
     *
     * @deprecated since version 2.24 - use Functions::flexiIN instead
     *
     * @param array $items
     * @param string $key
     *
     * @return string "in" fragment
     */
    public static function flexiIN(array $items, string $key)
    {
        return Functions::flexiIN($items, $key);
    }

    /**
     * Generuje fragment url pro filtrování.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/filters
     *
     * @deprecated since version 2.24 - use Functions::flexiUrl instead
     *
     * @param array  $data   key=>values; value can bee class DatePeriod, DateTime or Array
     * @param string $joiner default and/or
     * @param string $defop  default operator
     *
     * @return string
     */
    public static function flexiUrl(array $data, $joiner = 'and', $defop = 'eq')
    {
        return Functions::flexiUrl($data, $joiner, $defop);
    }

    /**
     * Obtain record/object numeric identificator id:
     * Vrací číselný identifikátor objektu id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return null|int indentifikátor záznamu reprezentovaného objektem
     */
    public function getRecordID()
    {
        $id = $this->getDataValue('id');
        return is_null($id) ? null : (is_numeric($id) ? intval($id) : $id);
    }

    /**
     * Obtain record/object identificator code:
     * Vrací identifikátor objektu code:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return string record code identifier
     */
    public function getRecordCode()
    {
        return empty($this->getDataValue('kod')) ? null : self::code($this->getDataValue('kod'));
    }

    /**
     * Obtain record/object identificator extId: code: or id:
     * Vrací identifikátor objektu extId: code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return string|int|null record code identifier
     */
    public function getRecordIdent()
    {
        $ident = $this->getExternalID();
        if (empty($ident)) {
            $ident = $this->getRecordCode();
        }
        if (empty($ident)) {
            $ident = $this->getRecordID();
            if ($this->debug && is_numeric($ident)) {
                $this->addStatusMessage(sprintf('getRecordIdent: only numeric record identificator %d in %s found', $ident, $this->getEvidence()), 'warning');
            }
        }
        return $ident;
    }

    /**
     * Obtain record/object identificator code: or id:
     * Vrací identifikátor objektu code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     *
     * @return string indentifikátor záznamu reprezentovaného objektem
     */
    public function __toString()
    {
        return strval($this->getRecordIdent());
    }

    /**
     * Gives you AbraFlexi class name for Given Evidence
     *
     * @deprecated since version 2.24 - use Functions::evidenceToClassName instead
     *
     * @param string $evidence
     *
     * @return string Class name
     */
    public static function evidenceToClassName($evidence)
    {
        return Functions::evidenceToClassName($evidence);
    }

    /**
     * Obtain ID of first record in evidence
     *
     * @return string|null id or null if no records
     */
    public function getFirstRecordID()
    {
        $firstID = null;
        $keyColumn = $this->getKeyColumn();
        $firstIdRaw = $this->getColumnsFromAbraFlexi(
            [$keyColumn],
            ['limit' => 1, 'order' => $keyColumn],
            $keyColumn
        );
        if (!empty($firstIdRaw) && isset(current($firstIdRaw)[$keyColumn])) {
            $firstID = current($firstIdRaw)[$keyColumn];
        }
        return is_numeric($firstID) ? intval($firstID) : $firstID;
    }

    /**
     * Get next record ID
     *
     * @param array $conditions optional
     *
     * @return int|null
     */
    public function getNextRecordID($conditions = [])
    {
        $conditions['order'] = 'id@D';
        $conditions['limit'] = 1;
        $conditions[] = 'id gt ' . $this->getRecordID();
        $next = $this->getColumnsFromAbraFlexi(['id'], $conditions);
        return (is_array($next) && array_key_exists(0, $next) && array_key_exists(
            'id',
            $next[0]
        )) ? intval($next[0]['id']) : null;
    }

    /**
     * Get next record ID
     *
     * @param array $conditions optional
     *
     * @return int|null
     */
    public function getPrevRecordID($conditions = [])
    {
        $conditions['order'] = 'id@A';
        $conditions['limit'] = 1;
        $conditions[] = 'id lt ' . $this->getRecordID();
        $prev = $this->getColumnsFromAbraFlexi(['id'], $conditions);
        return (is_array($prev) && array_key_exists(0, $prev) && array_key_exists(
            'id',
            $prev[0]
        )) ? intval($prev[0]['id']) : null;
    }

    /**
     * Vrací hodnotu daného externího ID
     *
     * @param string $want Namespace Selector. If empty,you obtain the first one.
     *
     * @return string|array one id or array if multiplete
     */
    public function getExternalID($want = null)
    {
        $extid = null;
        $ids = $this->getExternalIDs();
        if (is_null($want)) {
            if (!empty($ids)) {
                $extid = is_object($ids) ? (is_array($ids->value) ? current($ids->value) : $ids) : current($ids);
            }
        } else {
            if (!is_null($ids) && is_array($ids->value)) {
                foreach ($ids->value as $id) {
                    if (strstr($id, 'ext:' . $want)) {
                        if (is_null($extid)) {
                            $extid = str_replace('ext:' . $want . ':', '', $id);
                        } else {
                            if (is_array($extid)) {
                                $extid[] = str_replace('ext:' . $want . ':', '', $id);
                            } else {
                                $extid = [$extid, str_replace(
                                    'ext:' . $want . ':',
                                    '',
                                    $id
                                )];
                            }
                        }
                    }
                }
            }
        }
        return $extid;
    }

    /**
     * gives you currently loaded extermal IDs
     *
     * @return array
     */
    public function getExternalIDs()
    {
        return $this->getDataValue('external-ids');
    }

    /**
     * Obtain actual GlobalVersion
     * Vrací aktuální globální verzi změn
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/changes-api#globalVersion Globální Verze
     *
     * @return int
     */
    public function getGlobalVersion()
    {
        $this->getFlexiData('', ['add-global-version' => 'true', 'limit' => 1]);
        return $this->globalVersion;
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
        $apiUrl = str_replace(['.' . $this->format, '?limit=0'], '', $this->apiURL);
        return $apiUrl . (empty($format) ? '' : '.' . $format );
    }

    /**
     * Obtain content type of last response
     *
     * @return string
     */
    public function getResponseFormat()
    {
        return $this->responseFormat;
    }

    /**
     * Return the same response format for one and multiplete results
     *
     * @param array $responseBody
     *
     * @return array
     */
    public function unifyResponseFormat($responseBody)
    {
        if (
                !is_array($responseBody) || array_key_exists(
                    'message',
                    $responseBody
                )
        ) { //Unifi response format
            $response = $responseBody;
        } else {
            $evidence = array_key_exists('relations', $responseBody) ? 'relations' : $this->getResponseEvidence();
            if (array_key_exists($evidence, $responseBody)) {
                $response = [];
                $evidenceContent = (array) $responseBody[$evidence];
                if (array_key_exists(0, $evidenceContent)) {
                    $response[$evidence] = $evidenceContent; //Multiplete Results
                } else {
                    $response[$evidence][0] = $evidenceContent; //One result
                }
            } else {
                if (isset($responseBody['priloha'])) {
                    $response = $responseBody['priloha'];
                } else {
                    if (array_key_exists('results', $responseBody)) {
                        $response = $responseBody['results'];
                    } else {
                        $response = $responseBody;
                    }
                }
            }
        }
        return $response;
    }

    /**
     * Obtain structure for current (or given) evidence
     *
     * @param string $evidence
     *
     * @return array Evidence structure
     */
    public function getOfflineColumnsInfo($evidence = null)
    {
        $columnsInfo = null;
        $infoSource = self::$infoDir . '/Properties.' . (empty($evidence) ? $this->getEvidence() : $evidence) . '.json';
        if (file_exists($infoSource)) {
            $columnsInfo = json_decode(file_get_contents($infoSource), true);
        }

        if (property_exists('\AbraFlexi\Relations', $evidence)) {
            foreach (Relations::$$evidence as $url => $properties) {
                $properties['type'] = 'relations';
                $columnsInfo[$url] = $properties;
            }
        }

        return $columnsInfo;
    }

    /**
     * Obtain Current evidence Live structure
     *
     * @param string $evidence
     *
     * @return array structure
     */
    public function getOnlineColumnsInfo($evidence = null)
    {
        $properties = [];
        $evidence = is_null($evidence) ? $this->getEvidence() : $evidence;
        $flexinfo = $this->performRequest('/c/' . $this->company . '/' . $evidence . '/properties.json');
        if (!empty($flexinfo) && array_key_exists('properties', $flexinfo)) {
            foreach ($flexinfo['properties']['property'] as $evidenceProperty) {
                $key = $evidenceProperty['propertyName'];
                $properties[$key] = $evidenceProperty;
                if (array_key_exists('name', $evidenceProperty)) {
                    $proerties[$key]['name'] = $evidenceProperty['name'];
                }
                $properties[$key]['type'] = $evidenceProperty['type'];
                if (array_key_exists('url', $evidenceProperty)) {
                    $properties[$key]['url'] = str_replace(
                        '?limit=0',
                        '',
                        $evidenceProperty['url']
                    );
                }
            }
        }
        return $properties;
    }

    /**
     * Update evidence info from array or online from properties.json or offline
     *
     * @param array  $columnsInfo
     * @param string $evidence
     */
    public function updateColumnsInfo($columnsInfo = null, $evidence = null)
    {
        $evidence = is_null($evidence) ? $this->getEvidence() : $evidence;
        if (is_null($columnsInfo)) {
            $this->columnsInfo[$evidence] = $this->offline ? $this->getOfflineColumnsInfo($evidence) : $this->getOnlineColumnsInfo($evidence);
        } else {
            $this->columnsInfo[$evidence] = $columnsInfo;
        }
    }

    /**
     * Gives you evidence structure. You can obtain current online by pre-calling:
     * $this->updateColumnsInfo($evidence, $this->getOnlineColumnsInfo($evidence));
     *
     * @param string $evidence
     *
     * @return array
     */
    public function getColumnsInfo($evidence = null)
    {
        $evidence = is_null($evidence) ? $this->getEvidence() : $evidence;
        if (!array_key_exists($evidence, $this->columnsInfo)) {
            $this->updateColumnsInfo(
                $this->getOfflineColumnsInfo($evidence),
                $evidence
            );
        }
        return $this->columnsInfo[$evidence];
    }

    /**
     * Gives you properties for (current) evidence column
     *
     * @param string $column    name of column
     * @param string $evidence  evidence name if different
     *
     * @return array column properties or null if column not exits
     */
    public function getColumnInfo($column, $evidence = null)
    {
        $columnsInfo = $this->getColumnsInfo(empty($evidence) ? $this->getEvidence() : $evidence);
        return (empty($column) || empty($columnsInfo) || !is_array($columnsInfo)) ? null : (array_key_exists($column, $columnsInfo) ? $columnsInfo[$column] : null);
    }

    /**
     * Obtain actions for current (or given) evidence
     *
     * @param string $evidence
     *
     * @return array Evidence structure
     */
    public function getActionsInfo($evidence = null)
    {
        $actionsInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        $propsName = lcfirst(Functions::evidenceToClassName($evidence));
        if (isset(\AbraFlexi\Actions::$$propsName)) {
            $actionsInfo = Actions::$$propsName;
        }
        return $actionsInfo;
    }

    /**
     * Obtain relations for current (or given) evidence
     *
     * @param string $evidence
     *
     * @return array Evidence structure
     */
    public function getRelationsInfo($evidence = null)
    {
        $relationsInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        $propsName = lcfirst(Functions::evidenceToClassName($evidence));
        if (isset(\AbraFlexi\Relations::$$propsName)) {
            $relationsInfo = Relations::$$propsName;
        }
        return $relationsInfo;
    }

    /**
     * Obtain info for current (or given) evidence
     *
     * @param string $evidence
     *
     * @return array Evidence info
     */
    public function getEvidenceInfo($evidence = null)
    {
        $evidencesInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        if (isset(EvidenceList::$evidences[$evidence])) {
            $evidencesInfo = EvidenceList::$evidences[$evidence];
            $propsName = lcfirst(Functions::evidenceToClassName($evidence));
            if (isset(Formats::$$propsName)) {
                $evidencesInfo['formats'] = Formats::$$propsName;
            }
        }
        return $evidencesInfo;
    }

    /**
     * Obtain name for current (or given) evidence path
     *
     * @param string $evidence Evidence Path
     *
     * @return array Evidence info
     */
    public function getEvidenceName($evidence = null)
    {
        $evidenceName = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        if (isset(EvidenceList::$name[$evidence])) {
            $evidenceName = EvidenceList::$name[$evidence];
        }
        return $evidenceName;
    }

    /**
     * Save current object to file
     *
     * @param string $destfile path to file
     */
    public function saveResponseToFile($destfile)
    {
        if (strlen($this->lastCurlResponse)) {
            $this->doCurlRequest($this->apiURL, 'GET', $this->format);
        }
        file_put_contents($destfile, $this->lastCurlResponse);
    }

    /**
     * Obtain established relations listing
     *
     * @return array|null or Relations
     */
    public function getVazby($id = null)
    {
        if (is_null($id)) {
            $id = $this->getRecordID();
        }
        if (!empty($id)) {
            $vazbyRaw = $this->getColumnsFromAbraFlexi(
                ['vazby'],
                ['relations' => 'vazby', 'id' => $id]
            );
            $vazby = array_key_exists('vazby', $vazbyRaw[0]) ? $vazbyRaw[0]['vazby'] : null;
        } else {
            throw new \Exception(_('ID requied to get record relations '));
        }
        return $vazby;
    }

    /**
     * Gives You URL for Current Record in AbraFlexi web interface
     *
     * @return string url
     */
    public function getAbraFlexiURL()
    {
        $parsed_url = parse_url(str_replace('.' . $this->format, '', $this->apiURL));
        $scheme = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
        $host = isset($parsed_url['host']) ? $parsed_url['host'] : '';
        $port = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
        $user = isset($parsed_url['user']) ? $parsed_url['user'] : '';
        $pass = isset($parsed_url['pass']) ? ':' . $parsed_url['pass'] : '';
        $pass = ($user || $pass) ? "$pass@" : '';
        $path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
        return $scheme . $user . $pass . $host . $port . $path;
    }

    /**
     * Set Record Key
     *
     * @param int|string $myKeyValue
     *
     * @return boolean
     */
    public function setMyKey($myKeyValue)
    {
        $res = false;
        if (is_string($myKeyValue) && (is_numeric($myKeyValue) === false)) {
            if (substr($myKeyValue, 0, 4) == 'ext:') {
                if (empty($this->evidenceInfo) || ($this->evidenceInfo['extIdSupported'] == 'false')) {
                    $msg = sprintf(_('Evidence %s does not support extIDs'), $this->getEvidence());
                    $this->addStatusMessage($msg, 'warning');
                    if ($this->throwException) {
                        throw new Exception($msg, $this);
                    }
                } else {
                    $extIds = $this->getDataValue('external-ids');
                    if (!empty($extIds) && count($extIds)) {
                        $extIds = array_combine($extIds, $extIds);
                    }
                    $extIds[$myKeyValue] = $myKeyValue;
                    $res = $this->setDataValue('external-ids', $extIds);
                }
            }
            if (substr($myKeyValue, 0, 5) == 'code:') {
                $this->unsetDataValue($this->getKeyColumn());
                $res = $this->setDataValue('kod', $myKeyValue);
            }
        } else {
            $res = $this->setDataValue($this->getKeyColumn(), $myKeyValue);
        }
        $this->updateApiURL();
        return $res;
    }

    /**
     * Set or get ignore not found pages flag
     *
     * @param boolean $ignore set flag to
     *
     * @return boolean get flag state
     */
    public function ignore404($ignore = null)
    {
        if (!is_null($ignore)) {
            $this->ignoreNotFound = $ignore;
        }
        return $this->ignoreNotFound;
    }

    /**
     * Send Document by mail
     *
     * @url https://www.abraflexi.eu/api/dokumentace/ref/odesilani-mailem/
     *
     * @param string $to         Email ecipient
     * @param string $subject    Email Subject
     * @param string $body       Email Text
     *
     * @return boolean mail sent status
     */
    public function sendByMail($to, $subject, $body, $cc = null)
    {
        $this->setPostFields($body);
        $this->performRequest(
            rawurlencode((string) $this->getRecordIdent()) . '/odeslani-dokladu?to=' . $to . '&subject=' . urlencode($subject) . '&cc=' . $cc,
            'PUT',
            'xml'
        );
        return $this->lastResponseCode == 200;
    }

    /**
     * AbraFlexi date to PHP DateTime conversion
     *
     * @deprecated since version 2.24 - use Functions::flexiDateToDateTime instead
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00
     *
     * @return \DateTime | false
     */
    public static function flexiDateToDateTime(string $flexidate)
    {
        return Functions::flexiDateToDateTime($flexidate);
    }

    /**
     * AbraFlexi dateTime to PHP DateTime conversion
     *
     * @deprecated since version 2.24 - use Functions::flexiDateTimeToDateTime instead
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime | false
     */
    public static function flexiDateTimeToDateTime(string $flexidatetime)
    {
        return Functions::flexiDateTimeToDateTime($flexidatetime);
    }

    /**
     * Získá dokument v daném formátu
     * Obtain document in given format
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/pdf/ PDF Exports
     *
     * @param string  $format     pdf/csv/xml/json/ ...
     * @param string  $reportName Template used to generate PDF
     * @param string  $lang       cs|sk|en|de Template language used to generate PDF
     * @param boolean $sign       sign resulting PDF by certificate ?
     *
     * @return string|null filename downloaded or none
     */
    public function getInFormat(
        string $format,
        $reportName = null,
        $lang = null,
        $sign = false
    ) {
        $response = null;
        $formatBackup = $this->format;
        if ($this->setFormat($format)) {
            $urlParams = [];
            switch ($format) {
                case 'pdf':
                    if (empty($lang) === false) {
                        $urlParams['report-lang'] = $lang;
                    }
                    if (boolval($sign) === true) {
                        $urlParams['report-sign'] = 'true';
                    }
                    break;
                case 'html':
                    $urlParams['inDesktopApp'] = 'true';
                    break;
            }
            if (!empty($reportName)) {
                $urlParams['report-name'] = $reportName;
            }
            if (
                    ($this->doCurlRequest(\Ease\Functions::addUrlParams(
                        $this->apiURL,
                        $urlParams
                    ), 'GET') == 200)
            ) {
                $response = $this->lastCurlResponse;
            }
            $this->setFormat($formatBackup);
        }
        return $response;
    }

    /**
     * Uloží dokument v daném formátu do složky v systému souborů
     * Save document in given format to directory in filesystem
     *
     * @param string  $format  pdf/csv/xml/json/ ...
     * @param string  $destDir where to put file (prefix)
     * @param string  $reportName Template used to generate PDF
     * @param string  $lang Requested Language
     * @param boolean $sign download digital signed
     *
     * @return string|null filename downloaded or none
     */
    public function downloadInFormat(
        string $format,
        $destDir = './',
        $reportName = null,
        $lang = null,
        $sign = false
    ) {
        $downloadTo = $destDir . $this->getEvidence() . '_' . $this->getMyKey() . '.' . $format;
        $downloaded = $this->getInFormat($format, $reportName, $lang, $sign);
        return file_put_contents($downloadTo, $downloaded) ? $downloadTo : null;
    }

    /**
     * Take data for object. separate external IDs
     *
     * @param array $data Data to keep
     *
     * @return int number of records taken
     */
    public function takeData($data)
    {
        $keyColumn = $this->getKeyColumn();
        if (is_array($data) && array_key_exists($keyColumn, $data) && is_array($data[$keyColumn])) {
            foreach ($data[$keyColumn] as $recPos => $recordKey) {
                if (substr($recordKey, 0, 4) == 'ext:') {
                    $data['external-ids'][] = $recordKey;
                    unset($data[$keyColumn][$recPos]);
                }
            }
            if (count($data[$keyColumn]) == 1) {
                $data[$keyColumn] = current($data[$keyColumn]);
            }
        }
        $result = parent::takeData($data);
        if ($result && (array_key_exists($keyColumn, $data) || array_key_exists('kod', $data))) {
            $this->updateApiURL();
        }

        return $result;
    }

    /**
     * Get Current Evidence reports listing
     *
     * @link https://www.abraflexi.eu/api/dokumentace/casto-kladene-dotazy-pro-api/vyber-reportu-do-pdf/ Výběr reportu do PDF
     *
     * @return array
     */
    public function getReportsInfo()
    {
        $reports = [];
        $reportsRaw = $this->getFlexiData($this->getEvidenceURL() . '/reports');
        if (
                !empty($reportsRaw) && array_key_exists('reports', $reportsRaw) && !empty($reportsRaw['reports']) && array_key_exists('report', $reportsRaw['reports']) &&
                !empty($reportsRaw['reports']['report'])
        ) {
            if (\Ease\Functions::isAssoc($reportsRaw['reports']['report'])) {
                $reports = [$reportsRaw['reports']['report']['reportId'] => $reportsRaw['reports']['report']];
            } else {
                $reports = \Ease\Functions::reindexArrayBy(
                    $reportsRaw['reports']['report'],
                    'reportId'
                );
            }
        }
        return $reports;
    }

    /**
     * Request authSessionId from current server
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/login/ description
     *
     * @param string $username
     * @param string $password
     * @param string $otp       optional onetime password
     *
     * @return string authUserId or null in case of problems
     */
    public function requestAuthSessionID(string $username, string $password, $otp = null)
    {
        $this->postFields = http_build_query(is_null($otp) ? ['username' => $username,
            'password' => $password] : ['username' => $username, 'password' => $password,
            'otp' => $otp]);
        $response = $this->performRequest(
            '/login-logout/login',
            'POST',
            'json'
        );
        if (array_key_exists('refreshToken', $response)) {
            $this->refreshToken = $response['refreshToken'];
        } else {
            $this->refreshToken = null;
        }
        return array_key_exists('authSessionId', $response) ? $response['authSessionId'] : null;
    }

    /**
     * Try to Sign in current user to AbraFlexi and keep authSessionId
     *
     * @return boolean sign in success
     */
    public function login()
    {
        $this->authSessionId = $this->requestAuthSessionID(
            $this->user,
            $this->password
        );
        return $this->lastResponseCode == 200;
    }

    /**
     * End (current's user) session
     *
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/logout Logout Reference
     *
     * @param string $username force username to sign off
     *
     * @return array server response
     */
    public function logout($username = null)
    {
        return $this->performRequest('/status/user/' . (is_null($username) ? $this->user : $username) . '/logout', 'POST');
    }

    /**
     * Compile and send Report about Error500 to AbraFlexi developers
     * If AbraFlexi is running on localost try also include java backtrace
     *
     * @param array $errorResponse result of parseError();
     */
    public function error500Reporter($errorResponse)
    {
        $ur = str_replace(
            '/c/' . $this->company,
            '',
            str_replace($this->url, '', $this->curlInfo['url'])
        );
        if (!array_key_exists($ur, $this->reports)) {
            $tmpdir = sys_get_temp_dir();
            $myTime = $this->curlInfo['when'];
            $curlname = $tmpdir . '/curl-' . $this->evidence . '-' . $myTime . '.json';
            file_put_contents(
                $curlname,
                json_encode($this->curlInfo, JSON_PRETTY_PRINT)
            );
            $report = new \Ease\Mailer(
                $this->reportRecipient,
                'Error report 500 - ' . $ur
            );
            $d = dir($tmpdir);
            while (false !== ($entry = $d->read())) {
                if (strstr($entry, $myTime)) {
                    $ext = pathinfo($tmpdir . '/' . $entry, PATHINFO_EXTENSION);
                    $mime = Formats::suffixToContentType($ext);
                    $report->addFile(
                        $tmpdir . '/' . $entry,
                        empty($mime) ? 'text/plain' : $mime
                    );
                }
            }
            $d->close();
            if (
                    (strstr($this->url, '://localhost') || strstr(
                        $this->url,
                        '://127.'
                    )) && file_exists('/var/log/flexibee.log')
            ) {
                $fl = fopen('/var/log/' . 'flexibee.log', 'r');
                if ($fl) {
                    $tracelog = [];
                    for (
                            $x_pos = 0, $ln = 0, $output = array(); fseek(
                                $fl,
                                $x_pos,
                                SEEK_END
                            ) !== -1; $x_pos--
                    ) {
                        $char = fgetc($fl);
                        if ($char === "\n") {
                            $tracelog[] = $output[$ln];
                            if (strstr($output[$ln], $errorResponse['message'])) {
                                break;
                            }
                            $ln++;
                            continue;
                        }
                        $output[$ln] = $char . ((array_key_exists($ln, $output)) ? $output[$ln] : '');
                    }

                    $trace = implode("\n", array_reverse($tracelog));
                    $tracefile = $tmpdir . '/trace-' . $this->evidence . '-' . $myTime . '.log';
                    file_put_contents($tracefile, $trace);
                    $report->addText("\n\n" . $trace);
                    fclose($fl);
                }
            } else {
                $report->addText($errorResponse['message']);
            }

            $licenseInfo = $this->performRequest($this->url . '/default-license.json');
            $report->addText("\n\n" . json_encode(
                $licenseInfo['license'],
                JSON_PRETTY_PRINT
            ));
            if ($report->send()) {
                $this->reports[$ur] = $myTime;
            }
        }
    }

    /**
     * Returns code:CODE
     *
     * @deprecated since version 2.24 - use Functions::code instead
     *
     * @param string $code
     *
     * @return string
     */
    public static function code(string $code)
    {
        return Functions::code($code);
    }

    /**
     * Returns CODE without code: prefix
     *
     * @deprecated since version 2.24 - Use Functions::uncode instead
     *
     * @param string $code
     *
     * @return string
     */
    public static function uncode(string $code)
    {
        return Functions::uncode($code);
    }

    /**
     * Remove all @ items from array
     *
     * @param array $data original data
     *
     * @return array data without @ columns
     */
    public static function arrayCleanUP(array $data)
    {
        return array_filter(
            $data,
            function ($key) {
                return !strchr($key, '@');
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    /**
     * Add Info about used user, server and libraries
     *
     * @param string $prefix banner prefix text
     * @param string $suffix banner suffix text
     */
    public function logBanner($prefix = null, $suffix = null)
    {
        parent::logBanner(
            $prefix,
            'ServerURL ' . str_replace(
                '://',
                '://' . $this->user . '@',
                $this->getApiUrl()
            ) . ' php-abraflexi v' . self::$libVersion . ' (AbraFlexi ' . EvidenceList::$version . ')'
        );
    }

    /**
     * Get Last operation type
     *
     * @return string create|read|update|delete or update,insert for some inserted and updated in one transaction
     */
    public function getLastOperationType()
    {
        return implode(',', array_keys(array_filter($this->responseStats)));
    }

    /**
     * Last operation errors
     *
     * @return array AbraFlexi error meassages
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Reconnect After unserialization
     */
    public function __wakeup()
    {
        $this->curlInit();
    }
}
