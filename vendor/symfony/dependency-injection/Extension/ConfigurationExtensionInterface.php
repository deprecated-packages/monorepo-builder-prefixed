<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Extension;

use _PhpScoperab93339c6bca\Symfony\Component\Config\Definition\ConfigurationInterface;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * ConfigurationExtensionInterface is the interface implemented by container extension classes.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface ConfigurationExtensionInterface
{
    /**
     * Returns extension configuration.
     *
     * @return ConfigurationInterface|null The configuration or null
     */
    public function getConfiguration(array $config, \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder $container);
}
