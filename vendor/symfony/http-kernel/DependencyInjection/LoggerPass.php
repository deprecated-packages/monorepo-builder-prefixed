<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa13b4bfa005\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperfa13b4bfa005\Psr\Log\LoggerInterface;
use _PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa13b4bfa005\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperfa13b4bfa005\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperfa13b4bfa005\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
