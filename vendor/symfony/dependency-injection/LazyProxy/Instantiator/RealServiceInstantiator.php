<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\LazyProxy\Instantiator;

use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Definition;
/**
 * {@inheritdoc}
 *
 * Noop proxy instantiator - produces the real service instead of a proxy instance.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiator implements \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\LazyProxy\Instantiator\InstantiatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function instantiateProxy(\_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerInterface $container, \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Definition $definition, $id, $realInstantiator)
    {
        return $realInstantiator();
    }
}
