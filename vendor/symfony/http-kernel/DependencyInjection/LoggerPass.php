<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper23507306fdfc\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper23507306fdfc\Psr\Log\LoggerInterface;
use _PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper23507306fdfc\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoper23507306fdfc\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoper23507306fdfc\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
