<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera1d8e0344ecf\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Reference;
use _PhpScopera1d8e0344ecf\Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver;
use _PhpScopera1d8e0344ecf\Symfony\Component\Stopwatch\Stopwatch;
/**
 * Gathers and configures the argument value resolvers.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ControllerArgumentValueResolverPass implements \_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    use PriorityTaggedServiceTrait;
    private $argumentResolverService;
    private $argumentValueResolverTag;
    private $traceableResolverStopwatch;
    public function __construct(string $argumentResolverService = 'argument_resolver', string $argumentValueResolverTag = 'controller.argument_value_resolver', string $traceableResolverStopwatch = 'debug.stopwatch')
    {
        $this->argumentResolverService = $argumentResolverService;
        $this->argumentValueResolverTag = $argumentValueResolverTag;
        $this->traceableResolverStopwatch = $traceableResolverStopwatch;
    }
    public function process(\_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->argumentResolverService)) {
            return;
        }
        $resolvers = $this->findAndSortTaggedServices($this->argumentValueResolverTag, $container);
        if ($container->getParameter('kernel.debug') && \class_exists(\_PhpScopera1d8e0344ecf\Symfony\Component\Stopwatch\Stopwatch::class) && $container->has($this->traceableResolverStopwatch)) {
            foreach ($resolvers as $resolverReference) {
                $id = (string) $resolverReference;
                $container->register("debug.{$id}", \_PhpScopera1d8e0344ecf\Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver::class)->setDecoratedService($id)->setArguments([new \_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Reference("debug.{$id}.inner"), new \_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Reference($this->traceableResolverStopwatch)]);
            }
        }
        $container->getDefinition($this->argumentResolverService)->replaceArgument(1, new \_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Argument\IteratorArgument($resolvers));
    }
}
