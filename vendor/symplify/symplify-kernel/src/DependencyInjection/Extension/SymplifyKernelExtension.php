<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopercd844fca8af3\Symfony\Component\Config\FileLocator;
use _PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercd844fca8af3\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
