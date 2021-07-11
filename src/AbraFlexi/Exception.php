<?php

/**
 * AbraFlexi - Somenthing goes wrong.
 *
 * Generated: Sat, 27 Feb 2021 22:30:07 +0100 
 * From:      https://vitexsoftware.flexibee.eu:5434
 *    
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2021 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Exception
 *
 * @author vitex
 */
class Exception extends \Ease\Exception {

    /**
     * Original server response
     * @var string
     */
    private $serverResponse = '';

    /**
     * Error messages sit here
     * @var array
     */
    private $errorMessages = [];

    /**
     * AbraFlexi response as Exception
     * 
     * @param string $message good to know
     * 
     * @param RO $caller AbraFlexi Object
     * 
     * @param \Ease\Exception $previous 
     */
    public function __construct($message, RO $caller, \Ease\Exception $previous = null) {
        $this->errorMessages = $caller->getErrors();
        $this->serverResponse = $caller->lastCurlResponse;
        parent::__construct(get_class($caller) . ': ' . $message, $caller->lastResponseCode, $previous);
    }

    /**
     * Get (first) error message
     * 
     * @param int $index which message
     * 
     * @return string
     */
    public function getErrorMessage($index = 0) {
        return $this->errorMessages[$index];
    }

    /**
     * All stored Error messages
     * 
     * @return array
     */
    public function getErrorMessages() {
        return $this->errorMessages;
    }

}
