<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperd659a053ca1c\Symfony\Component\Config\FileLocator;
use _PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd659a053ca1c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd659a053ca1c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
