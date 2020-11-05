<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperfd1a6a0ee9af\Psr\Container\ContainerInterface;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperfd1a6a0ee9af\Symfony\Contracts\Service\ServiceProviderInterface;
/**
 * Compiler pass to inject their service locator to service subscribers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveServiceSubscribersPass extends \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    private $serviceLocator;
    protected function processValue($value, $isRoot = \false)
    {
        if ($value instanceof \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Reference && $this->serviceLocator && \in_array((string) $value, [\_PhpScoperfd1a6a0ee9af\Psr\Container\ContainerInterface::class, \_PhpScoperfd1a6a0ee9af\Symfony\Contracts\Service\ServiceProviderInterface::class], \true)) {
            return new \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Reference($this->serviceLocator);
        }
        if (!$value instanceof \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Definition) {
            return parent::processValue($value, $isRoot);
        }
        $serviceLocator = $this->serviceLocator;
        $this->serviceLocator = null;
        if ($value->hasTag('container.service_subscriber.locator')) {
            $this->serviceLocator = $value->getTag('container.service_subscriber.locator')[0]['id'];
            $value->clearTag('container.service_subscriber.locator');
        }
        try {
            return parent::processValue($value);
        } finally {
            $this->serviceLocator = $serviceLocator;
        }
    }
}
