<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Extension;

use _PhpScoperafeb7177e88e\Symfony\Component\Config\Definition\ConfigurationInterface;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder;
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
    public function getConfiguration(array $config, \_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder $container);
}
