<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Reference;
use _PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface;
/**
 * Adds services tagged kernel.fragment_renderer as HTTP content rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FragmentRendererPass implements \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $handlerService;
    private $rendererTag;
    public function __construct(string $handlerService = 'fragment.handler', string $rendererTag = 'kernel.fragment_renderer')
    {
        $this->handlerService = $handlerService;
        $this->rendererTag = $rendererTag;
    }
    public function process(\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->handlerService)) {
            return;
        }
        $definition = $container->getDefinition($this->handlerService);
        $renderers = [];
        foreach ($container->findTaggedServiceIds($this->rendererTag, \true) as $id => $tags) {
            $def = $container->getDefinition($id);
            $class = $container->getParameterBag()->resolveValue($def->getClass());
            if (!($r = $container->getReflectionClass($class))) {
                throw new \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            }
            if (!$r->isSubclassOf(\_PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class)) {
                throw new \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, \_PhpScopereb7fcd8f999a\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class));
            }
            foreach ($tags as $tag) {
                $renderers[$tag['alias']] = new \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Reference($id);
            }
        }
        $definition->replaceArgument(0, \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $renderers));
    }
}
