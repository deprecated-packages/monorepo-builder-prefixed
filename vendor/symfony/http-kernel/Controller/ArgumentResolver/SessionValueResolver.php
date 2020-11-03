<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request;
use _PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the Session.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class SessionValueResolver implements \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        if (!$request->hasSession()) {
            return \false;
        }
        $type = $argument->getType();
        if (\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Session\SessionInterface::class !== $type && !\is_subclass_of($type, \_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Session\SessionInterface::class)) {
            return \false;
        }
        return $request->getSession() instanceof $type;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->getSession());
    }
}
