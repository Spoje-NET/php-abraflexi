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
 * Description of Date.
 *
 * @author vitex
 */
class Date extends \DateTime
{
    /**
     * Support for Null values.
     */
    public bool $isNull = false;

    /**
     * AbraFlexi date to PHP DateTime conversion.
     *
     * @param string $flexidate 2017-05-26 or 2017-05-26Z or 2017-05-26+02:00 or "NOW"
     *
     * @return \DateTime|false
     */
    public function __construct(string $flexidate = 'NOW')
    {
        $this->isNull = empty($flexidate);
        $format = '';

        if (strstr($flexidate, '+')) {
            $format = Functions::$DateFormat.'T';
        } elseif (strstr($flexidate, 'Z')) {
            $format = Functions::$DateFormat.'Z';
        } elseif (!empty($flexidate) && ($flexidate !== 'NOW')) {
            $format = Functions::$DateFormat;

            if (strstr($flexidate, ':')) {
                $format .= '-i:s';
            }
        }

        if (empty($format)) {
            parent::__construct();
        } else {
            parent::__construct(\DateTime::createFromFormat($format, $flexidate)
                ->setTime(0, 0)->format(\DateTimeInterface::ATOM));
        }
    }

    /**
     * Render Object as AbraFlexi::$DateFormat.
     */
    public function __toString(): string
    {
        return $this->isNull ? '' : $this->format(Functions::$DateFormat);
    }

    /**
     * Convert Timestamp to AbraFlexi Date format.
     *
     * @param int $timpestamp
     *
     * @return \AbraFlexi\Date or NULL
     */
    public static function timestampToFlexiDate($timpestamp = null): self
    {
        $flexiDate = new self();

        if (null !== $timpestamp) {
            $flexiDate->setTimestamp($timpestamp);
        }

        return $flexiDate;
    }
}
