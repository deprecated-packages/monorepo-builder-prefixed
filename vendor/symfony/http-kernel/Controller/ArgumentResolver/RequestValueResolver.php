<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere9939b84e968\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScopere9939b84e968\Symfony\Component\HttpFoundation\Request;
use _PhpScopere9939b84e968\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScopere9939b84e968\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScopere9939b84e968\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScopere9939b84e968\Symfony\Component\HttpFoundation\Request $request, \_PhpScopere9939b84e968\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScopere9939b84e968\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScopere9939b84e968\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScopere9939b84e968\Symfony\Component\HttpFoundation\Request $request, \_PhpScopere9939b84e968\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
