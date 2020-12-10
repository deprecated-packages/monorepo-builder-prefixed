<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperfccd2ca01403\Symfony\Component\Config\FileLocator;
use _PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfccd2ca01403\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfccd2ca01403\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
