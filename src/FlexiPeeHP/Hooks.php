<?php
/**
 * FlexiPeeHP - WebHooks.
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/web-hooks WebHooks Reference
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Hooky pro ChangesAPI
 *
 * @note Tato položka nemá dostupné položky evidence
 */
class Hooks extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'hooks';

    /**
     * Zaregistruje WebHook
     *
     * @param string $url URL skript přímající WebHook
     * @param string $format json|xml formát přenášených dat
     *
     * @return boolean výsledek požadavku
     */
    public function register($url, $format = 'json')
    {
        $this->setDataValue('url', $url);
        $this->setDataValue('format', strtoupper($format));

        $hooks = $this->getAllFromFlexibee();
        if (is_array($hooks) && count($hooks)) {
            foreach ($hooks as $hook) {
                if (is_array($hook) && array_key_exists('url', $hook)) {
                    if ($hook['url'] == $url) {
                        $this->addStatusMessage(_('Url allready registered'),
                            'warning');
                        return false;
                    }
                }
            }
        }
        $this->performRequest('?'.http_build_query($this->getData()), 'PUT',
            'xml');

        return $this->lastResponseCode === 200;
    }

    /**
     * Aktualizuje WebHook (penalty = 0)
     * 
     * @param int $id
     */
    public function refreshWebHook($id)
    {
        $this->performRequest($id.'/retry', 'PUT');
        return $this->lastResponseCode === 200;
    }

    /**
     * Odregistruje webhook
     *
     * @param int $id číslo záznamu
     */
    public function unregister($id)
    {
        return $this->deleteFromFlexiBee($id);
    }

    /**
     * Test if given record exists in FlexiBee.
     *
     * @param array $data
     * @return null Unsupported evidence
     */
    public function recordExists($data = null)
    {
        return null;
    }
}
