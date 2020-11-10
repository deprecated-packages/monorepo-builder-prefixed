<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper058a557299a1\Symfony\Component\Config\FileLocator;
use _PhpScoper058a557299a1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper058a557299a1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper058a557299a1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
