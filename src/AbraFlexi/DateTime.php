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
 * Description of DateTime.
 *
 * @author vitex
 */
class DateTime extends \DateTime
{
    /**
     * Support for Null values.
     */
    /* bool */
    public bool $isNull = false;

    /**
     * Default output format.
     */
    public static string $format = 'Y-m-d\TH:i:s.u+P';

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
        $format = '';

        if (strstr($flexidatetime, '.')) { // NewFormat
            $format = self::$format;
        } elseif (!empty($flexidatetime) && ($flexidatetime !== 'NOW')) { // Old format
            $format = 'Y-m-d\TH:i:s+P';
        }

        if (empty($format)) {
            parent::__construct();
        } else {
            parent::__construct(\DateTime::createFromFormat($format, $flexidatetime)->format(\DateTimeInterface::ATOM));
        }
    }

    /**
     * Render Object as AbraFlexi::$DateTimeFormat.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->isNull ? '' : $this->format(self::$format);
    }

    /**
     * Easy way how to force format DateTime used.
     *
     * @param string
     *
     * @return \DateTime|false
     */
    public function setFormat(string $format)
    {
        self::$format = $format;

        return $this;
    }
}
