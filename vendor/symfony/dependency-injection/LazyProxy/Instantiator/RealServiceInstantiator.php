<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\LazyProxy\Instantiator;

use _PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\Definition;
/**
 * {@inheritdoc}
 *
 * Noop proxy instantiator - produces the real service instead of a proxy instance.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiator implements \_PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\LazyProxy\Instantiator\InstantiatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function instantiateProxy(\_PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\ContainerInterface $container, \_PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\Definition $definition, string $id, callable $realInstantiator)
    {
        return $realInstantiator();
    }
}
