<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaff2103cee1d\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperaff2103cee1d\Psr\Log\LoggerInterface;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaff2103cee1d\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperaff2103cee1d\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperaff2103cee1d\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
