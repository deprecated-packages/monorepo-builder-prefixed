<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperdd9048e10aae\Psr\Log\LoggerInterface;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperdd9048e10aae\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
