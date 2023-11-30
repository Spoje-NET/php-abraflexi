<?php

/**
 * AbraFlexi - Somenthing goes wrong.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2021-2023 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Exception
 *
 * @author vitex
 */
class Exception extends \Ease\Exception
{
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
    public function __construct($message, RO $caller, \Ease\Exception $previous = null)
    {
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
    public function getErrorMessage($index = 0)
    {
        return $this->errorMessages[$index];
    }

    /**
     * All stored Error messages
     *
     * @return array
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * Raw API Response
     *
     * @return string
     */
    public function getServerResponse()
    {
        return $this->serverResponse;
    }
}
