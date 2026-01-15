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
 * Description of DateTime.
 *
 * @author vitex
 *
 * @no-named-arguments
 */
class DateTime extends \DateTime implements \Stringable
{
    /**
     * Support for Null values.
     */
    /* bool */
    public bool $isNull = false;

    /**
     * Default output format.
     */
    public static string $format = 'Y-m-d\TH:i:s.uP';

    /**
     * AbraFlexi dateTime to PHP DateTime conversion.
     *
     * @param string $flexidatetime 2017-09-26T10:00:53.755+02:00 or older 2017-05-19T00:00:00+02:00
     *
     * @return \DateTime|false
     */
    public function __construct(string $flexidatetime = 'NOW')
    {
        $this->isNull = empty($flexidatetime);

        if ($this->isNull) {
            parent::__construct();
            $this->isNull = true;

            return;
        }

        $format = '';

        if (strstr($flexidatetime, '.')) { // NewFormat
            $format = self::$format;
        } elseif ($flexidatetime !== 'NOW') { // Old format
            $format = 'Y-m-d\TH:i:sP';
        }

        if (empty($format)) {
            parent::__construct($flexidatetime);
        } else {
            $sourceObject = \DateTime::createFromFormat($format, $flexidatetime);

            if ($sourceObject) {
                // Use a format that preserves microseconds for the parent constructor
                parent::__construct($sourceObject->format('Y-m-d H:i:s.u'), $sourceObject->getTimezone());
            } else {
                parent::__construct($flexidatetime); // Fallback
            }
        }
    }

    /**
     * Render Object as AbraFlexi::$DateTimeFormat.
     */
    public function __toString(): string
    {
        return $this->isNull ? '' : $this->format(self::$format);
    }

    /**
     * Convert Timestamp to Flexi DateTime format.
     *
     * @deprecated message: Use DateTime::fromTimestamp() instead
     *
     * @param int $timpestamp
     *
     * @return string AbraFlexi DateTime or NULL
     */
    public static function timestampToFlexiDateTime($timpestamp = null)
    {
        $flexiDateTime = null;

        if (null !== $timpestamp) {
            $date = new \DateTime();
            $date->setTimestamp($timpestamp);
            $flexiDateTime = $date->format('Y-m-dTH:i:s');
        }

        return $flexiDateTime;
    }

    /**
     * Easy way how to force format DateTime used.
     *
     * @return \DateTime|false
     */
    public function setFormat(string $format)
    {
        self::$format = $format;

        return $this;
    }

    public static function fromDateTime(\DateTime $when): self
    {
        return new self($when->format(self::$format));
    }

    public static function fromTimestamp(int $timpestamp): self
    {
        $flexiDate = new self();

        $flexiDate->setTimestamp($timpestamp);

        return $flexiDate;
    }
    public function toDateTime(): \DateTime
    {
        $dateTime = new \DateTime();
        $dateTime->setTimestamp($this->getTimestamp());
        $dateTime->setTimezone(new \DateTimeZone(date_default_timezone_get()));

        return $dateTime;
    }
}
