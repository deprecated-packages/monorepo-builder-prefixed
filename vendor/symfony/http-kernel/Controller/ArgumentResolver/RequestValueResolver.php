<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScopercd5c1af09a49\Symfony\Component\HttpFoundation\Request;
use _PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScopercd5c1af09a49\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScopercd5c1af09a49\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScopercd5c1af09a49\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScopercd5c1af09a49\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercd5c1af09a49\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
