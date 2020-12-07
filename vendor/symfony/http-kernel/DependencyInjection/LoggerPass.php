<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperab93339c6bca\Psr\Log\LoggerInterface;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperab93339c6bca\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperab93339c6bca\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperab93339c6bca\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
