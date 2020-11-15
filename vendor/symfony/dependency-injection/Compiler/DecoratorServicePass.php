<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Alias;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Reference;
/**
 * Overwrites a service but keeps the overridden one.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DecoratorServicePass implements \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $definitions = new \SplPriorityQueue();
        $order = \PHP_INT_MAX;
        foreach ($container->getDefinitions() as $id => $definition) {
            if (!($decorated = $definition->getDecoratedService())) {
                continue;
            }
            $definitions->insert([$id, $definition], [$decorated[2], --$order]);
        }
        $decoratingDefinitions = [];
        foreach ($definitions as list($id, $definition)) {
            $decoratedService = $definition->getDecoratedService();
            list($inner, $renamedId) = $decoratedService;
            $invalidBehavior = $decoratedService[3] ?? \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
            $definition->setDecoratedService(null);
            if (!$renamedId) {
                $renamedId = $id . '.inner';
            }
            $definition->innerServiceId = $renamedId;
            $definition->decorationOnInvalid = $invalidBehavior;
            // we create a new alias/service for the service we are replacing
            // to be able to reference it in the new one
            if ($container->hasAlias($inner)) {
                $alias = $container->getAlias($inner);
                $public = $alias->isPublic();
                $private = $alias->isPrivate();
                $container->setAlias($renamedId, new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Alias((string) $alias, \false));
            } elseif ($container->hasDefinition($inner)) {
                $decoratedDefinition = $container->getDefinition($inner);
                $public = $decoratedDefinition->isPublic();
                $private = $decoratedDefinition->isPrivate();
                $decoratedDefinition->setPublic(\false);
                $container->setDefinition($renamedId, $decoratedDefinition);
                $decoratingDefinitions[$inner] = $decoratedDefinition;
            } elseif (\_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_INVALID_REFERENCE === $invalidBehavior) {
                $container->removeDefinition($id);
                continue;
            } elseif (\_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerInterface::NULL_ON_INVALID_REFERENCE === $invalidBehavior) {
                $public = $definition->isPublic();
                $private = $definition->isPrivate();
            } else {
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException($inner, $id);
            }
            if (isset($decoratingDefinitions[$inner])) {
                $decoratingDefinition = $decoratingDefinitions[$inner];
                $definition->setTags(\array_merge($decoratingDefinition->getTags(), $definition->getTags()));
                $decoratingDefinition->setTags([]);
                $decoratingDefinitions[$inner] = $definition;
            }
            $container->setAlias($inner, $id)->setPublic($public)->setPrivate($private);
        }
    }
}
