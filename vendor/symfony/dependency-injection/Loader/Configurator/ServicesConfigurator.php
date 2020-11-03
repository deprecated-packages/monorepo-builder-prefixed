<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Alias;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ChildDefinition;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Definition;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServicesConfigurator extends \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator
{
    const FACTORY = 'services';
    private $defaults;
    private $container;
    private $loader;
    private $instanceof;
    private $path;
    private $anonymousHash;
    private $anonymousCount;
    public function __construct(\_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ContainerBuilder $container, \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader $loader, array &$instanceof, string $path = null, int &$anonymousCount = 0)
    {
        $this->defaults = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Definition();
        $this->container = $container;
        $this->loader = $loader;
        $this->instanceof =& $instanceof;
        $this->path = $path;
        $this->anonymousHash = \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ContainerBuilder::hash($path ?: \mt_rand());
        $this->anonymousCount =& $anonymousCount;
        $instanceof = [];
    }
    /**
     * Defines a set of defaults for following service definitions.
     */
    public final function defaults() : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\DefaultsConfigurator
    {
        return new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\DefaultsConfigurator($this, $this->defaults = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Definition(), $this->path);
    }
    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    public final function instanceof(string $fqcn) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\InstanceofConfigurator
    {
        $this->instanceof[$fqcn] = $definition = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ChildDefinition('');
        return new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\InstanceofConfigurator($this, $definition, $fqcn, $this->path);
    }
    /**
     * Registers a service.
     *
     * @param string|null $id    The service id, or null to create an anonymous service
     * @param string|null $class The class of the service, or null when $id is also the class name
     */
    public final function set(?string $id, string $class = null) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ServiceConfigurator
    {
        $defaults = $this->defaults;
        $allowParent = !$defaults->getChanges() && empty($this->instanceof);
        $definition = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Definition();
        if (null === $id) {
            if (!$class) {
                throw new \LogicException('Anonymous services must have a class name.');
            }
            $id = \sprintf('.%d_%s', ++$this->anonymousCount, \preg_replace('/^.*\\\\/', '', $class) . '~' . $this->anonymousHash);
            $definition->setPublic(\false);
        } else {
            $definition->setPublic($defaults->isPublic());
        }
        $definition->setAutowired($defaults->isAutowired());
        $definition->setAutoconfigured($defaults->isAutoconfigured());
        $definition->setBindings($defaults->getBindings());
        $definition->setChanges([]);
        $configurator = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ServiceConfigurator($this->container, $this->instanceof, $allowParent, $this, $definition, $id, $defaults->getTags(), $this->path);
        return null !== $class ? $configurator->class($class) : $configurator;
    }
    /**
     * Creates an alias.
     */
    public final function alias(string $id, string $referencedId) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\AliasConfigurator
    {
        $ref = static::processValue($referencedId, \true);
        $alias = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Alias((string) $ref, $this->defaults->isPublic());
        $this->container->setAlias($id, $alias);
        return new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\AliasConfigurator($this, $alias);
    }
    /**
     * Registers a PSR-4 namespace using a glob pattern.
     */
    public final function load(string $namespace, string $resource) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\PrototypeConfigurator
    {
        $allowParent = !$this->defaults->getChanges() && empty($this->instanceof);
        return new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\PrototypeConfigurator($this, $this->loader, $this->defaults, $namespace, $resource, $allowParent);
    }
    /**
     * Gets an already defined service definition.
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */
    public final function get(string $id) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ServiceConfigurator
    {
        $allowParent = !$this->defaults->getChanges() && empty($this->instanceof);
        $definition = $this->container->getDefinition($id);
        return new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ServiceConfigurator($this->container, $definition->getInstanceofConditionals(), $allowParent, $this, $definition, $id, []);
    }
    /**
     * Registers a service.
     */
    public final function __invoke(string $id, string $class = null) : \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ServiceConfigurator
    {
        return $this->set($id, $class);
    }
    public function __destruct()
    {
        $this->loader->registerAliasesForSinglyImplementedInterfaces();
    }
}
