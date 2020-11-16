<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperdfa889d8967a\Symfony\Component\Config\FileLocator;
use _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdfa889d8967a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
