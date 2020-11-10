<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScopera31d0d6ff47a\Symfony\Component\HttpFoundation\Request;
use _PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the default value defined in the action signature when no value has been given.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class DefaultValueResolver implements \_PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScopera31d0d6ff47a\Symfony\Component\HttpFoundation\Request $request, \_PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return $argument->hasDefaultValue() || null !== $argument->getType() && $argument->isNullable() && !$argument->isVariadic();
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScopera31d0d6ff47a\Symfony\Component\HttpFoundation\Request $request, \_PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $argument->hasDefaultValue() ? $argument->getDefaultValue() : null);
    }
}
