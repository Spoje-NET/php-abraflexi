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
 * Příloha.
 *
 * @see https://www.abraflexi.eu/api/dokumentace/ref/attachments/
 * @see https://demo.flexibee.eu/c/demo/priloha/properties
 */
class Priloha extends RW
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'priloha';

    /**
     * Evidence s přílohami.
     */
    public static array $relatedEvidence = [
        'prodejka' => 'doklFak', 'pohledavka' => 'doklFak', 'zavazek' => 'doklFak',
        'faktura-prijata' => 'doklFak', 'faktura-vydana' => 'doklFak',
        'interni-doklad' => 'doklInt', 'pokladni-pohyb' => 'doklInt', 'vzajemny-zapocet' => 'doklInt',
        'banka' => 'doklInt',
        'poptavka-vydana' => 'doklObch', 'poptavka-prijata' => 'doklObch', 'objednavka-prijata' => 'doklObch',
        'nabidka-vydana' => 'doklObch',
        'objednavka-vydana' => 'doklObch', 'nabidka-prijata' => 'doklObch',
        'skladovy-pohyb' => 'doklSklad',
        'cenik' => 'cenik',
        'adresar' => 'adresar', 'kontakt' => 'kontakt',
    ];

    /**
     * Attach file.
     *
     * @param string $filepath
     * @param array  $attachmentData
     */
    public function attachFile($filepath, $attachmentData = []): void
    {
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
     * Obtain url for Attachment Download.
     *
     * @param RO $object Source object
     *
     * @return string url
     */
    public static function getDownloadUrl($object)
    {
        $urlParts = parse_url($object->apiURL);
        $pathParts = pathinfo($urlParts['path']);

        return $urlParts['scheme'].'://'.$urlParts['host'].(\array_key_exists('port', $urlParts) ? ':'.$urlParts['port'] : '').$pathParts['dirname'].'/'.$pathParts['filename'].'/content';
    }

    /**
     * Obtain first attachment for given object.
     *
     * @param RO $object
     *
     * @return array
     */
    public static function getFirstAttachment($object)
    {
        $attachments = self::getAttachmentsList($object);

        return \count($attachments) ? current($attachments) : null;
    }

    /**
     * Gives you attachment body as return value.
     *
     * @param int   $attachmentID
     * @param array $options      Additional Connection Options
     *
     * @return string
     */
    public static function getAttachment($attachmentID, $options = [])
    {
        $result = null;
        $downloader = new self($attachmentID, $options);

        if ($downloader->lastResponseCode === 200) {
            $downloader->doCurlRequest(self::getDownloadURL($downloader), 'GET');

            if ($downloader->lastResponseCode === 200) { /** @phpstan-ignore-line */
                $result = $downloader->lastCurlResponse;
            }
        }

        return $result;
    }

    /**
     * Send "download" headers first and then file itself.
     *
     * @param RO         $object
     * @param mixed      $format
     * @param int|string $attachmentID
     */
    public static function download(
        $object,
        $format = 'pdf',
        $attachmentID = null,
    ): void {
        $attachments = self::getAttachmentsList($object);

        if (isset($attachmentID) && !\array_key_exists($attachmentID, $attachments)) {
            $object->addStatusMessage(sprintf(_('Attachment %s does no exist'), $attachmentID), 'warning');

            if ($object->throwException === true) {
                throw new Exception(sprintf(_('Attachment %s does no exist'), $attachmentID), $object);
            }
        }

        $attachmentBody = $object->doCurlRequest(self::getDownloadUrl($object), 'GET');
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Disposition: attachment; filename='.$object->getEvidence().'_'.$object.'.'.$format);
        header('Content-Length: '.\strlen($attachmentBody));
        echo $attachmentBody;
    }

    /**
     * Save attachment to file.
     *
     * @param string $destination directory or filename with path
     *
     * @return int saved attachment length in bytes
     */
    public static function saveToFile(int $attachmentID, $destination)
    {
        $result = 0;
        $downloader = new self($attachmentID, ['autoload' => true]);

        if ($downloader->lastResponseCode === 200) {
            if (is_dir($destination)) {
                $destination .= '/'.$downloader->getDataValue('nazSoub');
            }

            $result = file_put_contents($destination, base64_decode($downloader->getDataValue('content'), true));
        }

        return $result;
    }

    /**
     * Add Attachment from File.
     *
     * @param RW     $object
     * @param string $filename
     *
     * @return Priloha attached file object
     */
    public static function addAttachmentFromFile($object, $filename)
    {
        return self::addAttachment(
            $object,
            basename($filename),
            file_get_contents($filename),
            mime_content_type($filename),
        );
    }

    /**
     * Add Attachment related to current $object content.
     *
     * @param RW     $object
     * @param string $filename
     * @param string $attachment  Body
     * @param string $contentType Attachment Content-Type
     *
     * @return Priloha attached file object
     */
    public static function addAttachment(
        $object,
        $filename,
        $attachment,
        $contentType,
    ) {
        $attached = new self(null, $object->getConnectionOptions());
        $attached->postFields = $attachment;
        $attached->defaultHttpHeaders['Content-Type'] = $contentType;
        $url = $object->getEvidenceURL().'/'.$object->getRecordID().'/prilohy/new/'.$filename;
        $response = $attached->performRequest($url, 'PUT');
        $attached->setMyKey($response[0]['id']);

        return $attached;
    }

    /**
     * Obtain Record related attachments list.
     *
     * @param RO $object
     *
     * @return array
     */
    public static function getAttachmentsList($object)
    {
        $fburl = $object->getAbraFlexiURL();
        $attachments = [];
        $oFormat = $object->format;
        $object->setFormat('json');
        $atch = $object->getFlexiData($fburl.'/prilohy'.(\count($object->defaultUrlParams) ? '?'.http_build_query($object->defaultUrlParams) : ''));
        $object->setFormat($oFormat);

        if (!empty($atch) && ($object->lastResponseCode === 200)) {
            foreach ($atch as $attachmentData) {
                $attachments[$attachmentData['id']] = $attachmentData;
                $attachments[$attachmentData['id']]['url'] = $object->url.'/c/'.$object->company.'/priloha/'.$attachmentData['id'];
            }
        }

        return $attachments;
    }
}
