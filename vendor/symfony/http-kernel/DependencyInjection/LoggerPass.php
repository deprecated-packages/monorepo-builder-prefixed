<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd1a6a0ee9af\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperfd1a6a0ee9af\Psr\Log\LoggerInterface;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperfd1a6a0ee9af\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperfd1a6a0ee9af\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
