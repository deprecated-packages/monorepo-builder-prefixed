<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopereaa2cae8e093\Symfony\Component\Config\FileLocator;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopereaa2cae8e093\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
