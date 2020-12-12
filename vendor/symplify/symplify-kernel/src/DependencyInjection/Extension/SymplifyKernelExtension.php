<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperf40000691b7b\Symfony\Component\Config\FileLocator;
use _PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf40000691b7b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
