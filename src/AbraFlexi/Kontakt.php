<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Kontakt adresáře.
 *
 * @see https://demo.flexibee.eu/c/demo/kontakt/properties
 */
class Kontakt extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'kontakt';

    /**
     * Authenticate by contact.
     *
     * @see https://www.abraflexi.eu/api/dokumentace/ref/autentizace-kontaktu/ Contact Auth
     *
     * @param string $login
     * @param string $password
     *
     * @return bool
     */
    public function authenticate($login, $password): bool
    {
        $defaultHttpHeaders = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        $this->setPostFields(http_build_query(['username' => $login, 'password' => $password]));
        $result = $this->performRequest(
            'authenticate',
            'POST',
            'xml',
        );
        $this->defaultHttpHeaders = $defaultHttpHeaders;

        if (!empty($result['message'])) {
            $this->addStatusMessage($result['message'], $result['success'] === 'true' ? 'success' : 'warning');

            if ($this->throwException === true && $result['success'] !== 'true') {
                throw new Exception($result['message'], $this);
            }
        }

        return \array_key_exists('success', $result) && $result['success'] === 'true';
    }
}
