<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperab93339c6bca\Symfony\Component\Config\FileLocator;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperab93339c6bca\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
