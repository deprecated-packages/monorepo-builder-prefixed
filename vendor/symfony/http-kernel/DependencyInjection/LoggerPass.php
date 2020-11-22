<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper30f4a2553084\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper30f4a2553084\Psr\Log\LoggerInterface;
use _PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper30f4a2553084\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoper30f4a2553084\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoper30f4a2553084\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
