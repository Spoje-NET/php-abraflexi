<?php

/**
 * FlexiBee - / related functions.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiBee;

/**
 * Description of Common
 *
 * @author vitex
 */
class Root extends RW {

    /**
     * Update HTTPS certificate
     * 
     * @param string $pem
     * 
     * @return boolean
     */
    public function uploadCertificate($pem) {
        $this->postFields = $pem;
        $this->performRequest('/certificate', 'PUT');
        return $this->lastResponseCode == 201;
    }

    /**
     * Get availble companies listing
     * 
     * @param array $condition applay to listing
     * 
     * @return array
     */
    public function companies($conditions = []) {
        return $this->getFlexiData('/c', $conditions);
    }

}
