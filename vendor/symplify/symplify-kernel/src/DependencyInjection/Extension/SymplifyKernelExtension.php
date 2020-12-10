<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperf4d251e01a80\Symfony\Component\Config\FileLocator;
use _PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf4d251e01a80\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf4d251e01a80\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
