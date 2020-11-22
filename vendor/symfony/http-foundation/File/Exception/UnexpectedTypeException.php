<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper1f0085d891d8\Symfony\Component\HttpFoundation\File\Exception;

class UnexpectedTypeException extends \_PhpScoper1f0085d891d8\Symfony\Component\HttpFoundation\File\Exception\FileException
{
    public function __construct($value, string $expectedType)
    {
        parent::__construct(\sprintf('Expected argument of type %s, %s given', $expectedType, \is_object($value) ? \get_class($value) : \gettype($value)));
    }
}
