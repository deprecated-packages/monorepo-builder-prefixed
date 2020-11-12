<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperad3f32c1b87c\Psr\Log\LoggerInterface;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperad3f32c1b87c\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
