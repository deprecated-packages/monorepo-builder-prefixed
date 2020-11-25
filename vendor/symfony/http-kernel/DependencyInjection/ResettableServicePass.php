<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Exception\RuntimeException;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Reference;
/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $tagName;
    public function __construct(string $tagName = 'kernel.reset')
    {
        $this->tagName = $tagName;
    }
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->has('services_resetter')) {
            return;
        }
        $services = $methods = [];
        foreach ($container->findTaggedServiceIds($this->tagName, \true) as $id => $tags) {
            $services[$id] = new \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Reference($id, \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);
            $attributes = $tags[0];
            if (!isset($attributes['method'])) {
                throw new \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Exception\RuntimeException(\sprintf('Tag %s requires the "method" attribute to be set.', $this->tagName));
            }
            $methods[$id] = $attributes['method'];
        }
        if (empty($services)) {
            $container->removeAlias('services_resetter');
            $container->removeDefinition('services_resetter');
            return;
        }
        $container->findDefinition('services_resetter')->setArgument(0, new \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Argument\IteratorArgument($services))->setArgument(1, $methods);
    }
}
