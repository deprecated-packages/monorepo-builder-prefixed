<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperef4638f5d8b1\Symfony\Component\Config\FileLocator;
use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperef4638f5d8b1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
