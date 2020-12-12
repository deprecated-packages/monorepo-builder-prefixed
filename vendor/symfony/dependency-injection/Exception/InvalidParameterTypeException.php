<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9ce838b06e67\Symfony\Component\DependencyInjection\Exception;

/**
 * Thrown when trying to inject a parameter into a constructor/method with an incompatible type.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Julien Maulny <jmaulny@darkmira.fr>
 */
class InvalidParameterTypeException extends \_PhpScoper9ce838b06e67\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
{
    public function __construct(string $serviceId, string $type, \ReflectionParameter $parameter)
    {
        parent::__construct(\sprintf('Invalid definition for service "%s": argument %d of "%s::%s" accepts "%s", "%s" passed.', $serviceId, 1 + $parameter->getPosition(), $parameter->getDeclaringClass()->getName(), $parameter->getDeclaringFunction()->getName(), $parameter->getType()->getName(), $type));
    }
}
