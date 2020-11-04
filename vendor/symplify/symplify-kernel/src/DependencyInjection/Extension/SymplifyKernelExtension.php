<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperce084f4275dd\Symfony\Component\Config\FileLocator;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperce084f4275dd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
