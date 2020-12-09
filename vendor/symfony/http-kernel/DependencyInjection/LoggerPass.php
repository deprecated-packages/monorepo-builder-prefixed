<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaf523e5605cc\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperaf523e5605cc\Psr\Log\LoggerInterface;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaf523e5605cc\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperaf523e5605cc\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperaf523e5605cc\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
