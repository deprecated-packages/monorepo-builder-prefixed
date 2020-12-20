<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperc84013ed9ae7\Symfony\Component\Config\FileLocator;
use _PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc84013ed9ae7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc84013ed9ae7\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
