<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperf701e46e48a5\Symfony\Component\Config\FileLocator;
use _PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf701e46e48a5\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
