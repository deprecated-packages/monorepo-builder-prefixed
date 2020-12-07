<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScopereb7fcd8f999a\Psr\Log\LoggerInterface;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScopereb7fcd8f999a\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
