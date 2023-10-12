<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt kontaktu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

namespace AbraFlexi;

use AbraFlexi\firma;
use AbraFlexi\RW;
use AbraFlexi\stitky;

/**
 * Kontakt adresáře
 *
 * @link https://demo.flexibee.eu/c/demo/kontakt/properties
 */
class Kontakt extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'kontakt';

    /**
     * Authenticate by contact
     *
     * @link https://www.abraflexi.eu/api/dokumentace/ref/autentizace-kontaktu/ Contact Auth
     * @param string $login
     * @param string $password
     *
     * @return boolean
     */
    public function authenticate($login, $password)
    {
        $defaultHttpHeaders = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        $this->setPostFields(http_build_query(['username' => $login, 'password' => $password]));
        $result = $this->performRequest(
            'authenticate',
            'POST',
            'xml'
        );
        $this->defaultHttpHeaders = $defaultHttpHeaders;
        if (!empty($result['message'])) {
            $this->addStatusMessage($result['message'], $result['success'] == 'true' ? 'success' : 'warning');
            if ($this->throwException == true && $result['success'] != 'true') {
                throw new Exception($result['message'], $this);
            }
        }
        return array_key_exists('success', $result) && $result['success'] == 'true';
    }
}
