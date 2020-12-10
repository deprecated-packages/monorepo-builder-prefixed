<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperfa7966ff486f\Symfony\Component\Config\FileLocator;
use _PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfa7966ff486f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
