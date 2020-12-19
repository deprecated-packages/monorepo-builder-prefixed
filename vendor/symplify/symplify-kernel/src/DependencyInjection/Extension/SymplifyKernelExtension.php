<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperac0a9a33ae94\Symfony\Component\Config\FileLocator;
use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperac0a9a33ae94\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
