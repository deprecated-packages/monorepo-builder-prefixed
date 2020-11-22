<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperb3d59f519671\Symfony\Component\Config\FileLocator;
use _PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb3d59f519671\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb3d59f519671\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
