<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperad3f32c1b87c\Symfony\Component\HttpFoundation\Request;
use _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperad3f32c1b87c\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScoperad3f32c1b87c\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScoperad3f32c1b87c\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperad3f32c1b87c\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
