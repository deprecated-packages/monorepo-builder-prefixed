<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoper44b9ade4c89e\Symfony\Component\HttpFoundation\Request;
use _PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields a non-variadic argument's value from the request attributes.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestAttributeValueResolver implements \_PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoper44b9ade4c89e\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return !$argument->isVariadic() && $request->attributes->has($argument->getName());
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoper44b9ade4c89e\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper44b9ade4c89e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->attributes->get($argument->getName()));
    }
}
