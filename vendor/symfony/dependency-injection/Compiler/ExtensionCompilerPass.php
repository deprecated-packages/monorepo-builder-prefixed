<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * A pass to automatically process extensions if they implement
 * CompilerPassInterface.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class ExtensionCompilerPass implements \_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        foreach ($container->getExtensions() as $extension) {
            if (!$extension instanceof \_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface) {
                continue;
            }
            $extension->process($container);
        }
    }
}
