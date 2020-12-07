<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperdab52924cf3e\Symfony\Component\Config\FileLocator;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdab52924cf3e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
