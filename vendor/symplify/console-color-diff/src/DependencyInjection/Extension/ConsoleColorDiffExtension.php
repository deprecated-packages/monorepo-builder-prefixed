<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperad3f32c1b87c\Symfony\Component\Config\FileLocator;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperad3f32c1b87c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
