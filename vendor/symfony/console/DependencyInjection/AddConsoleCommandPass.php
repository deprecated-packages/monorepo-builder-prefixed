<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperabca9a64438b\Symfony\Component\Console\DependencyInjection;

use _PhpScoperabca9a64438b\Symfony\Component\Console\Command\Command;
use _PhpScoperabca9a64438b\Symfony\Component\Console\CommandLoader\ContainerCommandLoader;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\TypedReference;
/**
 * Registers console commands.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class AddConsoleCommandPass implements \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $commandLoaderServiceId;
    private $commandTag;
    public function __construct(string $commandLoaderServiceId = 'console.command_loader', string $commandTag = 'console.command')
    {
        $this->commandLoaderServiceId = $commandLoaderServiceId;
        $this->commandTag = $commandTag;
    }
    public function process(\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $commandServices = $container->findTaggedServiceIds($this->commandTag, \true);
        $lazyCommandMap = [];
        $lazyCommandRefs = [];
        $serviceIds = [];
        foreach ($commandServices as $id => $tags) {
            $definition = $container->getDefinition($id);
            $class = $container->getParameterBag()->resolveValue($definition->getClass());
            if (isset($tags[0]['command'])) {
                $commandName = $tags[0]['command'];
            } else {
                if (!($r = $container->getReflectionClass($class))) {
                    throw new \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
                }
                if (!$r->isSubclassOf(\_PhpScoperabca9a64438b\Symfony\Component\Console\Command\Command::class)) {
                    throw new \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('The service "%s" tagged "%s" must be a subclass of "%s".', $id, $this->commandTag, \_PhpScoperabca9a64438b\Symfony\Component\Console\Command\Command::class));
                }
                $commandName = $class::getDefaultName();
            }
            if (null === $commandName) {
                if (!$definition->isPublic() || $definition->isPrivate()) {
                    $commandId = 'console.command.public_alias.' . $id;
                    $container->setAlias($commandId, $id)->setPublic(\true);
                    $id = $commandId;
                }
                $serviceIds[] = $id;
                continue;
            }
            unset($tags[0]);
            $lazyCommandMap[$commandName] = $id;
            $lazyCommandRefs[$id] = new \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\TypedReference($id, $class);
            $aliases = [];
            foreach ($tags as $tag) {
                if (isset($tag['command'])) {
                    $aliases[] = $tag['command'];
                    $lazyCommandMap[$tag['command']] = $id;
                }
            }
            $definition->addMethodCall('setName', [$commandName]);
            if ($aliases) {
                $definition->addMethodCall('setAliases', [$aliases]);
            }
        }
        $container->register($this->commandLoaderServiceId, \_PhpScoperabca9a64438b\Symfony\Component\Console\CommandLoader\ContainerCommandLoader::class)->setPublic(\true)->setArguments([\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $lazyCommandRefs), $lazyCommandMap]);
        $container->setParameter('console.command.ids', $serviceIds);
    }
}
