<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperfdd2db5e123d\Psr\Log\LoggerInterface;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfdd2db5e123d\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperfdd2db5e123d\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperfdd2db5e123d\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
