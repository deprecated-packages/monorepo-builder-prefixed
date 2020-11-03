<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperdfdcb3d4cca0\Symfony\Component\Config\FileLocator;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdfdcb3d4cca0\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
