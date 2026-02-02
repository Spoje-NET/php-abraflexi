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
 * Hooky pro ChangesAPI.
 *
 * @note Tato položka nemá dostupné položky evidence
 *
 * @no-named-arguments
 */
class Hooks extends RW
{
    /**
     * Evidence used by object.
     */
    public ?string $evidence = 'hooks';

    /**
     * Zaregistruje WebHook.
     *
     * @param string $url    URL skript přímající WebHook
     * @param string $format json|xml formát přenášených dat
     *
     * @return bool výsledek požadavku
     */
    public function register($url, $format = 'json')
    {
        $this->setDataValue('url', $url);
        $this->setDataValue('format', strtoupper($format));

        $hooks = $this->getAllFromAbraFlexi();

        if (\is_array($hooks) && \count($hooks)) {
            foreach ($hooks as $hook) {
                if (\is_array($hook) && \array_key_exists('url', $hook)) {
                    if ($hook['url'] === $url) {
                        $this->addStatusMessage(sprintf(_('Url %s allready registered'), $url), 'debug');

                        return false;
                    }
                }
            }
        }

        $this->performRequest('?'.http_build_query($this->getData()), 'PUT');

        return $this->lastResponseCode === 200;
    }

    /**
     * Aktualizuje WebHook (penalty = 0).
     *
     * @param int $id
     */
    public function refreshWebHook($id)
    {
        $this->performRequest($id.'/retry', 'PUT');

        return $this->lastResponseCode === 200;
    }

    /**
     * Odregistruje webhook.
     *
     * @param int $id číslo záznamu
     */
    public function unregister($id)
    {
        return $this->deleteFromAbraFlexi($id);
    }

    /**
     * Test if given record exists in AbraFlexi.
     *
     * @param array $data
     *
     * @return bool Unsupported evidence
     */
    public function recordExists($data): bool
    {
        return false;
    }
}
