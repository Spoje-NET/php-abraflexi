<?php
/**
 * FlexiPeeHP - Objekt kontaktu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Kontakt adresáře
 *
 * @link https://demo.flexibee.eu/c/demo/kontakt/properties
 */
class Kontakt extends FlexiBeeRW
{

    use Stitky;
    use Firma;
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'kontakt';

    /**
     * Authenticate by contact
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/autentizace-kontaktu/ Contact Auth
     * @param string $login
     * @param string $password
     * 
     * @return boolean
     */
    public function authenticate($login, $password)
    {
        $defaultHttpHeaders                       = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        $this->setPostFields(http_build_query(['username' => $login, 'password' => $password]));
        $result                                   = $this->performRequest('authenticate',
            'POST', 'xml');
        $this->defaultHttpHeaders                 = $defaultHttpHeaders;
        if (!empty($result['message'])) {
            $this->addStatusMessage($result['message'],
                $result['success'] == 'true' ? 'success' : 'warning' );
        }
        return array_key_exists('success', $result) && $result['success'] == 'true';
    }
}
