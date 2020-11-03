<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper5efd9ec7ae1e\Symfony\Component\Config\FileLocator;
use _PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper5efd9ec7ae1e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
