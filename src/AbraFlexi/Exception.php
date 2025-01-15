<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Description of Exception.
 *
 * @author vitex
 */
class Exception extends \Ease\Exception
{
    /**
     * Original server response.
     */
    private string $serverResponse = '';

    /**
     * Error messages sit here.
     *
     * @var array<string>
     */
    private array $errorMessages = [];

    /**
     * AbraFlexi response as Exception.
     *
     * @param string $message good to know
     * @param RO     $caller  AbraFlexi Object
     */
    public function __construct($message, RO $caller, ?\Ease\Exception $previous = null)
    {
        $this->errorMessages = $caller->getErrors();
        $this->serverResponse = $caller->lastCurlResponse;
        parent::__construct(\get_class($caller).': '.$message, $caller->lastResponseCode, $previous);
    }

    /**
     * Get (first) error message.
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
     * All stored Error messages.
     *
     * @return array<string>
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * Raw API Response.
     *
     * @return string
     */
    public function getServerResponse()
    {
        return $this->serverResponse;
    }
}
