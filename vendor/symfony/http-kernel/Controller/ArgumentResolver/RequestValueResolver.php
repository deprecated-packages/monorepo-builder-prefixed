<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperd2185c67a4b4\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperd2185c67a4b4\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScoperd2185c67a4b4\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScoperd2185c67a4b4\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperd2185c67a4b4\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperd2185c67a4b4\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
