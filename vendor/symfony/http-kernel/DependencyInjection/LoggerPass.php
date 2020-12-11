<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbb737891eded\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperbb737891eded\Psr\Log\LoggerInterface;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbb737891eded\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperbb737891eded\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperbb737891eded\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
