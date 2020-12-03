<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3b1a4d12ef28\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Exception\RuntimeException;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Reference;
/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements \_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $tagName;
    public function __construct(string $tagName = 'kernel.reset')
    {
        $this->tagName = $tagName;
    }
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->has('services_resetter')) {
            return;
        }
        $services = $methods = [];
        foreach ($container->findTaggedServiceIds($this->tagName, \true) as $id => $tags) {
            $services[$id] = new \_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Reference($id, \_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);
            $attributes = $tags[0];
            if (!isset($attributes['method'])) {
                throw new \_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Exception\RuntimeException(\sprintf('Tag %s requires the "method" attribute to be set.', $this->tagName));
            }
            $methods[$id] = $attributes['method'];
        }
        if (empty($services)) {
            $container->removeAlias('services_resetter');
            $container->removeDefinition('services_resetter');
            return;
        }
        $container->findDefinition('services_resetter')->setArgument(0, new \_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Argument\IteratorArgument($services))->setArgument(1, $methods);
    }
}
