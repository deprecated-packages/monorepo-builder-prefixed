<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperddf2171d3d2c\Symfony\Component\Config\FileLocator;
use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperddf2171d3d2c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
