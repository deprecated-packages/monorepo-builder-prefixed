<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper3bda9af7e0fd\Symfony\Component\Config\FileLocator;
use _PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper3bda9af7e0fd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
