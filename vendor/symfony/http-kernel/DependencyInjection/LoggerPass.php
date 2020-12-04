<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7b254e6a7108\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper7b254e6a7108\Psr\Log\LoggerInterface;
use _PhpScoper7b254e6a7108\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper7b254e6a7108\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper7b254e6a7108\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoper7b254e6a7108\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper7b254e6a7108\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoper7b254e6a7108\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoper7b254e6a7108\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
