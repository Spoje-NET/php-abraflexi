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
 * Description of Code.
 *
 * @author Vitex <info@vitexsoftware.cz>
 */
class Code
{
    /**
     * Pure code string.
     */
    private string $code = '';

    public function __construct(mixed $subject)
    {
        $this->set(self::extract($subject));
    }

    public function __toString(): string
    {
        return 'code:'.$this->get();
    }

    public static function extract(mixed $subject): string
    {
        $code = '';

        if (\is_array($subject) && isset($subject['kod'])) {
            $code = $subject['kod'];
        } elseif (\is_object($subject) && method_exists($subject, 'getRecordCode')) {
            $code = $subject->getRecordCode();
        } elseif (\is_object($subject) && method_exists($subject, '__toString')) {
            $code = (string) $subject;
        }

        return $code;
    }

    public function get(): string
    {
        return $this->code;
    }

    public function set(string $code): self
    {
        $code = self::strip($code);

        if (mb_strlen($code) > 20) {
            throw new \InvalidArgumentException('Code must be at most 20 characters.');
        }

        $this->code = $code;

        return $this;
    }

    public static function ensure(string $code): string
    {
        return (substr($code, 0, 4) === 'ext:') ? $code : 'code:'.strtoupper(self::strip($code));
    }

    /**
     * Returns CODE without code: prefix.
     */
    public static function strip(string $code): string
    {
        return str_replace(['code:', 'code%3A'], '', $code);
    }
}
