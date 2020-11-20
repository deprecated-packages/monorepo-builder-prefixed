<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperabca9a64438b\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperabca9a64438b\Psr\Log\LoggerInterface;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperabca9a64438b\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperabca9a64438b\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperabca9a64438b\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
