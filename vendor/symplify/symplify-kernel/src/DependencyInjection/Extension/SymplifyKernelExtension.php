<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperfd1a6a0ee9af\Symfony\Component\Config\FileLocator;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
