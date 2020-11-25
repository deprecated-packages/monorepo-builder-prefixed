<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper7609e473a4cb\Symfony\Component\Config\FileLocator;
use _PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper7609e473a4cb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper7609e473a4cb\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
