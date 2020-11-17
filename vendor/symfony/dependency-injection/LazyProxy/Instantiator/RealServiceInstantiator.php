<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\LazyProxy\Instantiator;

use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Definition;
/**
 * {@inheritdoc}
 *
 * Noop proxy instantiator - produces the real service instead of a proxy instance.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiator implements \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\LazyProxy\Instantiator\InstantiatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function instantiateProxy(\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerInterface $container, \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Definition $definition, $id, $realInstantiator)
    {
        return $realInstantiator();
    }
}
