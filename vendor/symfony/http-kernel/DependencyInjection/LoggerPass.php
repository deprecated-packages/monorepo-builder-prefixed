<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperafeb7177e88e\Psr\Log\LoggerInterface;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperafeb7177e88e\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
