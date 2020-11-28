<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
