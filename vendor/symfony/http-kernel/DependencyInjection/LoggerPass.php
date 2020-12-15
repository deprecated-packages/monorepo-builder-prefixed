<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd79f30a2f8be\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperd79f30a2f8be\Psr\Log\LoggerInterface;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd79f30a2f8be\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperd79f30a2f8be\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperd79f30a2f8be\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
