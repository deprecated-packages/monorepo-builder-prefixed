<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperabb8c88e9df1\Symfony\Component\Config\FileLocator;
use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperabb8c88e9df1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
