<?php

/**
 * FlexiPeeHP - Objekt kontaktu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Příloha
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/attachments/
 * @link https://demo.flexibee.eu/c/demo/priloha/properties
 */
class Priloha extends RW {

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'priloha';

    /**
     * Evidence s přílohami
     *
     * @var array
     */
    public static $relatedEvidence = [
        'prodejka' => 'doklFak', 'pohledavka' => 'doklFak', 'zavazek' => 'doklFak',
        'faktura-prijata' => 'doklFak', 'faktura-vydana' => 'doklFak',
        'interni-doklad' => 'doklInt', 'pokladni-pohyb' => 'doklInt', 'vzajemny-zapocet' => 'doklInt',
        'banka' => 'doklInt',
        'poptavka-vydana' => 'doklObch', 'poptavka-prijata' => 'doklObch', 'objednavka-prijata' => 'doklObch',
        'nabidka-vydana' => 'doklObch',
        'objednavka-vydana' => 'doklObch', 'nabidka-prijata' => 'doklObch',
        'skladovy-pohyb' => 'doklSklad',
        'cenik' => 'cenik',
        'adresar' => 'adresar', 'kontakt' => 'kontakt'
    ];

    /**
     * Attach file
     * Přilož Soubor
     *
     * @param string $filepath
     * @param array  $attachmentData
     */
    public function attachFile($filepath, $attachmentData = []) {
        if (file_exists($filepath)) {
            $attachmentData['nazSoub'] = basename($filepath);
            $attachmentData['contentType'] = mime_content_type($filepath);
            $attachmentData['dataSize'] = filesize($filepath);
            $attachmentData['dataHash'] = md5_file($filepath);

            switch ($attachmentData['contentType']) {
                case 'image/png':
                case 'image/gif':
                case 'image/jpeg':
                    break;
            }
            $attachmentData['content'] = base64_encode(file_get_contents($filepath));
        }
    }

    /**
     * Obtain url for Attachment Download
     *
     * @param RO $object Source object
     * @return string url
     */
    public static function getDownloadUrl($object) {
        $urlParts = parse_url($object->apiURL);
        $pathParts = pathinfo($urlParts['path']);
        return $urlParts['scheme'] . '://' . $urlParts['host'] . ( array_key_exists('port', $urlParts) ? ':' . $urlParts['port'] : '') . $pathParts['dirname'] . '/' . $pathParts['filename'] . '/content';
    }

    /**
     * Obtain first attachment for given object
     *
     * @param  RO $object
     * @return array
     */
    public static function getFirstAttachment($object) {
        $attachments = self::getAttachmentsList($object);
        return count($attachments) ? current($attachments) : null;
    }

    /**
     * Gives you attachment body as return value
     * 
     * @param int   $attachmentID
     * @param array $options      Additional Connection Options
     * 
     * @return string
     */
    public static function getAttachment($attachmentID, $options = []) {
        $result = null;
        $downloader = new Priloha($attachmentID, $options);
        if ($downloader->lastResponseCode == 200) {

            $downloader->doCurlRequest(self::getDownloadURL($downloader), 'GET');
            if ($downloader->lastResponseCode == 200) {
                $result = $downloader->lastCurlResponse;
            }
        }
        return $result;
    }

    /**
     * Send "download" headers first and then file itself
     *
     * @param RO $object
     * @param int|string $attachmentID
     */
    public static function download($object, $format = 'pdf',
            $attachmentID = null) {
        $attachments = self::getAttachmentsList($object);

        if (isset($attachmentID) && !array_key_exists($attachmentID,
                        $attachments)) {
            $object->addStatusMessage(sprintf(_('Attagment %s does no exist'),
                            $attachmentID), 'warning');
        }

        $attachmentBody = $object->doCurlRequest(self::getDownloadUrl($object),
                'GET');
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Disposition: attachment; filename=' . $object->getEvidence() . '_' . $object . '.' . $format);
        header('Content-Length: ' . strlen($attachmentBody));
        echo $attachmentBody;
    }

    /**
     * Save attachment to file
     *
     * @param int $attachmentID
     * @param string $destination directory or filename with path
     * @return int
     */
    public static function saveToFile($attachmentID, $destination) {
        $result = 0;
        $downloader = new Priloha($attachmentID);
        if ($downloader->lastResponseCode == 200) {

            $downloader->doCurlRequest(self::getDownloadURL($downloader), 'GET');
            if ($downloader->lastResponseCode == 200) {
                if (is_dir($destination)) {
                    $destination .= '/' . $downloader->getDataValue('nazSoub');
                }
                $result = file_put_contents($destination,
                        $downloader->lastCurlResponse);
            }
        }
        return $result;
    }

    /**
     * Add Attachment from File
     *
     * @param RW $object
     * @param string     $filename
     *
     * @return Priloha attached file object
     */
    public static function addAttachmentFromFile($object, $filename) {
        return self::addAttachment($object, basename($filename),
                        file_get_contents($filename), mime_content_type($filename));
    }

    /**
     * Add Attachment related to current $object content
     *
     * @param RW $object
     * @param string $filename
     * @param string $attachment Body
     * @param string $contentType Attachment Content-Type
     *
     * @return Priloha attached file object
     */
    public static function addAttachment($object, $filename, $attachment,
            $contentType) {
        $attached = new Priloha();
        $headersBackup = $object->defaultHttpHeaders;
        $codeBackup = $object->lastResponseCode;
        $responseBackup = $object->lastCurlResponse;
        $object->postFields = $attachment;
        $object->defaultHttpHeaders['Content-Type'] = $contentType;
        $url = $object->getFlexiBeeURL() . '/prilohy/new/' . $filename;
        $response = $object->performRequest($url, 'PUT');
        $object->defaultHttpHeaders = $headersBackup;
        $attached->setMyKey($response[0]['id']);
        $attached->lastResponseCode = $object->lastResponseCode;
        $attached->lastCurlResponse = $object->lastCurlResponse;
        $object->lastResponseCode = $codeBackup;
        $object->lastCurlResponse = $responseBackup;
        return $attached;
    }

    /**
     * Obtain Record related attachments list
     *
     * @param RO $object
     * 
     * @return array
     */
    public static function getAttachmentsList($object) {
        $fburl = $object->getFlexiBeeURL();
        $attachments = [];
        $oFormat = $object->format;
        $object->setFormat('json');
        $atch = $object->getFlexiData($fburl . '/prilohy' . (count($object->defaultUrlParams) ? '?' . http_build_query($object->defaultUrlParams) : ''));
        $object->setFormat($oFormat);
        if (count($atch) && ($object->lastResponseCode == 200)) {
            foreach ($atch as $attachmentID => $attachmentData) {
                $attachments[$attachmentID] = $attachmentData;
                $attachments[$attachmentID]['url'] = $object->url . '/c/' . $object->company . '/priloha/' . $attachmentData['id'];
            }
        }
        return $attachments;
    }

}
