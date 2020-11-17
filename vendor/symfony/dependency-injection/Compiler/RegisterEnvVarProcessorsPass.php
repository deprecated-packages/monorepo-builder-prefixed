<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessor;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessorInterface;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Reference;
/**
 * Creates the container.env_var_processors_locator service.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterEnvVarProcessorsPass implements \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private static $allowedTypes = ['array', 'bool', 'float', 'int', 'string'];
    public function process(\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $bag = $container->getParameterBag();
        $types = [];
        $processors = [];
        foreach ($container->findTaggedServiceIds('container.env_var_processor') as $id => $tags) {
            if (!($r = $container->getReflectionClass($class = $container->getDefinition($id)->getClass()))) {
                throw new \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            } elseif (!$r->isSubclassOf(\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessorInterface::class)) {
                throw new \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessorInterface::class));
            }
            foreach ($class::getProvidedTypes() as $prefix => $type) {
                $processors[$prefix] = new \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Reference($id);
                $types[$prefix] = self::validateProvidedTypes($type, $class);
            }
        }
        if ($bag instanceof \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag) {
            foreach (\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessor::getProvidedTypes() as $prefix => $type) {
                if (!isset($types[$prefix])) {
                    $types[$prefix] = self::validateProvidedTypes($type, \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\EnvVarProcessor::class);
                }
            }
            $bag->setProvidedTypes($types);
        }
        if ($processors) {
            $container->setAlias('container.env_var_processors_locator', (string) \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $processors))->setPublic(\true);
        }
    }
    private static function validateProvidedTypes(string $types, string $class) : array
    {
        $types = \explode('|', $types);
        foreach ($types as $type) {
            if (!\in_array($type, self::$allowedTypes)) {
                throw new \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid type "%s" returned by "%s::getProvidedTypes()", expected one of "%s".', $type, $class, \implode('", "', self::$allowedTypes)));
            }
        }
        return $types;
    }
}
