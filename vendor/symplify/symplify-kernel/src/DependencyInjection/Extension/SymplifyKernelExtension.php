<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopercdfd316eda69\Symfony\Component\Config\FileLocator;
use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercdfd316eda69\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
