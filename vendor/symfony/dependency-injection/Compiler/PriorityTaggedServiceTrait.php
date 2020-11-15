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

use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Reference;
use _PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\TypedReference;
/**
 * Trait that allows a generic method to find and sort service by priority option in the tag.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
trait PriorityTaggedServiceTrait
{
    /**
     * Finds all services with the given tag name and order them by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \SplPriorityQueue class does not respect the FIFO method,
     * we should not use that class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @param string|TaggedIteratorArgument $tagName
     *
     * @return Reference[]
     */
    private function findAndSortTaggedServices($tagName, \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder $container) : array
    {
        $indexAttribute = $defaultIndexMethod = $needsIndexes = $defaultPriorityMethod = null;
        if ($tagName instanceof \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument) {
            $indexAttribute = $tagName->getIndexAttribute();
            $defaultIndexMethod = $tagName->getDefaultIndexMethod();
            $needsIndexes = $tagName->needsIndexes();
            $defaultPriorityMethod = $tagName->getDefaultPriorityMethod();
            $tagName = $tagName->getTag();
        }
        $services = [];
        foreach ($container->findTaggedServiceIds($tagName, \true) as $serviceId => $attributes) {
            $class = $r = null;
            $priority = 0;
            if (isset($attributes[0]['priority'])) {
                $priority = $attributes[0]['priority'];
            } elseif ($defaultPriorityMethod) {
                $class = $container->getDefinition($serviceId)->getClass();
                $class = $container->getParameterBag()->resolveValue($class) ?: null;
                if (($r = $container->getReflectionClass($class)) && $r->hasMethod($defaultPriorityMethod)) {
                    if (!($rm = $r->getMethod($defaultPriorityMethod))->isStatic()) {
                        throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should be static: tag "%s" on service "%s".', $class, $defaultPriorityMethod, $tagName, $serviceId));
                    }
                    if (!$rm->isPublic()) {
                        throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should be public: tag "%s" on service "%s".', $class, $defaultPriorityMethod, $tagName, $serviceId));
                    }
                    $priority = $rm->invoke(null);
                    if (!\is_int($priority)) {
                        throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should return an integer, got %s: tag "%s" on service "%s".', $class, $defaultPriorityMethod, \gettype($priority), $tagName, $serviceId));
                    }
                }
            }
            if (null === $indexAttribute && !$needsIndexes) {
                $services[$priority][] = new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Reference($serviceId);
                continue;
            }
            if (!$class) {
                $class = $container->getDefinition($serviceId)->getClass();
                $class = $container->getParameterBag()->resolveValue($class) ?: null;
            }
            if (null !== $indexAttribute && isset($attributes[0][$indexAttribute])) {
                $services[$priority][$attributes[0][$indexAttribute]] = new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\TypedReference($serviceId, $class, \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, $attributes[0][$indexAttribute]);
                continue;
            }
            if (!$r && !($r = $container->getReflectionClass($class))) {
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $serviceId));
            }
            $class = $r->name;
            if (!$r->hasMethod($defaultIndexMethod)) {
                if ($needsIndexes) {
                    $services[$priority][$serviceId] = new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\TypedReference($serviceId, $class);
                    continue;
                }
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" not found: tag "%s" on service "%s" is missing "%s" attribute.', $class, $defaultIndexMethod, $tagName, $serviceId, $indexAttribute));
            }
            if (!($rm = $r->getMethod($defaultIndexMethod))->isStatic()) {
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should be static: tag "%s" on service "%s" is missing "%s" attribute.', $class, $defaultIndexMethod, $tagName, $serviceId, $indexAttribute));
            }
            if (!$rm->isPublic()) {
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should be public: tag "%s" on service "%s" is missing "%s" attribute.', $class, $defaultIndexMethod, $tagName, $serviceId, $indexAttribute));
            }
            $key = $rm->invoke(null);
            if (!\is_string($key)) {
                throw new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Method "%s::%s()" should return a string, got %s: tag "%s" on service "%s" is missing "%s" attribute.', $class, $defaultIndexMethod, \gettype($key), $tagName, $serviceId, $indexAttribute));
            }
            $services[$priority][$key] = new \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\TypedReference($serviceId, $class, \_PhpScoper9e91fe07dbdd\Symfony\Component\DependencyInjection\ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, $key);
        }
        if ($services) {
            \krsort($services);
            $services = \array_merge(...$services);
        }
        return $services;
    }
}
