<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedfa898a454f\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperedfa898a454f\Psr\Log\LoggerInterface;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedfa898a454f\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperedfa898a454f\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperedfa898a454f\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
