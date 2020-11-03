<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessor;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessorInterface;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Reference;
/**
 * Creates the container.env_var_processors_locator service.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterEnvVarProcessorsPass implements \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private static $allowedTypes = ['array', 'bool', 'float', 'int', 'string'];
    public function process(\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $bag = $container->getParameterBag();
        $types = [];
        $processors = [];
        foreach ($container->findTaggedServiceIds('container.env_var_processor') as $id => $tags) {
            if (!($r = $container->getReflectionClass($class = $container->getDefinition($id)->getClass()))) {
                throw new \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            } elseif (!$r->isSubclassOf(\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessorInterface::class)) {
                throw new \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessorInterface::class));
            }
            foreach ($class::getProvidedTypes() as $prefix => $type) {
                $processors[$prefix] = new \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Reference($id);
                $types[$prefix] = self::validateProvidedTypes($type, $class);
            }
        }
        if ($bag instanceof \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag) {
            foreach (\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessor::getProvidedTypes() as $prefix => $type) {
                if (!isset($types[$prefix])) {
                    $types[$prefix] = self::validateProvidedTypes($type, \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\EnvVarProcessor::class);
                }
            }
            $bag->setProvidedTypes($types);
        }
        if ($processors) {
            $container->setAlias('container.env_var_processors_locator', (string) \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $processors))->setPublic(\true);
        }
    }
    private static function validateProvidedTypes(string $types, string $class) : array
    {
        $types = \explode('|', $types);
        foreach ($types as $type) {
            if (!\in_array($type, self::$allowedTypes)) {
                throw new \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid type "%s" returned by "%s::getProvidedTypes()", expected one of "%s".', $type, $class, \implode('", "', self::$allowedTypes)));
            }
        }
        return $types;
    }
}
