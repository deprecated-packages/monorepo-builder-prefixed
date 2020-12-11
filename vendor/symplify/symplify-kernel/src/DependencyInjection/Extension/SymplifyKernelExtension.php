<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperbecbc4cd500f\Symfony\Component\Config\FileLocator;
use _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbecbc4cd500f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
