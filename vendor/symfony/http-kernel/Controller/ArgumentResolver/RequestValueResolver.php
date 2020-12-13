<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperee3ad0c2c096\Symfony\Component\HttpFoundation\Request;
use _PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperee3ad0c2c096\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScoperee3ad0c2c096\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScoperee3ad0c2c096\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperee3ad0c2c096\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperee3ad0c2c096\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
