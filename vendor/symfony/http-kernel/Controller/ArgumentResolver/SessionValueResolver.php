<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Request;
use _PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the Session.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class SessionValueResolver implements \_PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Request $request, \_PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        if (!$request->hasSession()) {
            return \false;
        }
        $type = $argument->getType();
        if (\_PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Session\SessionInterface::class !== $type && !\is_subclass_of($type, \_PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Session\SessionInterface::class)) {
            return \false;
        }
        return $request->getSession() instanceof $type;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScopera3f2f7450f99\Symfony\Component\HttpFoundation\Request $request, \_PhpScopera3f2f7450f99\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->getSession());
    }
}
