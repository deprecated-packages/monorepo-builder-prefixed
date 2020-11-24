<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper0f23ef1f1d10\Symfony\Component\ErrorHandler;

/**
 * @internal
 */
class ThrowableUtils
{
    public static function getSeverity(\Throwable $throwable) : int
    {
        if ($throwable instanceof \ErrorException) {
            return $throwable->getSeverity();
        }
        if ($throwable instanceof \ParseError) {
            return \E_PARSE;
        }
        if ($throwable instanceof \TypeError) {
            return \E_RECOVERABLE_ERROR;
        }
        return \E_ERROR;
    }
}
