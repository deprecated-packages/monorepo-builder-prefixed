<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperce084f4275dd\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperce084f4275dd\Psr\Log\LoggerInterface;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperce084f4275dd\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperce084f4275dd\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperce084f4275dd\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
