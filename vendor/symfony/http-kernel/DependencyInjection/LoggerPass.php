<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdab52924cf3e\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperdab52924cf3e\Psr\Log\LoggerInterface;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdab52924cf3e\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperdab52924cf3e\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperdab52924cf3e\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
