<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperfdd2db5e123d\Symfony\Component\Config\FileLocator;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfdd2db5e123d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
