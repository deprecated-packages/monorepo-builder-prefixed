<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * This extension sub-class provides first-class integration with the
 * Config/Definition Component.
 *
 * You can use this as base class if
 *
 *    a) you use the Config/Definition component for configuration,
 *    b) your configuration class is named "Configuration", and
 *    c) the configuration class resides in the DependencyInjection sub-folder.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class ConfigurableExtension extends \_PhpScoperab93339c6bca\Symfony\Component\HttpKernel\DependencyInjection\Extension
{
    /**
     * {@inheritdoc}
     */
    public final function load(array $configs, \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->loadInternal($this->processConfiguration($this->getConfiguration($configs, $container), $configs), $container);
    }
    /**
     * Configures the passed container according to the merged configuration.
     */
    protected abstract function loadInternal(array $mergedConfig, \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder $container);
}
