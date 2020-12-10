<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperec2b815193b4\Symfony\Component\Config\FileLocator;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperec2b815193b4\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
