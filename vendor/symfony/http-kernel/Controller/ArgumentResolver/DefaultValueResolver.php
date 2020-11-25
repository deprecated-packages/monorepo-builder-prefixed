<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperfa8ac9431c57\Symfony\Component\HttpFoundation\Request;
use _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the default value defined in the action signature when no value has been given.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class DefaultValueResolver implements \_PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperfa8ac9431c57\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return $argument->hasDefaultValue() || null !== $argument->getType() && $argument->isNullable() && !$argument->isVariadic();
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperfa8ac9431c57\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $argument->hasDefaultValue() ? $argument->getDefaultValue() : null);
    }
}
