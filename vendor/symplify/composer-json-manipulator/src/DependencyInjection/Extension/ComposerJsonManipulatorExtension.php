<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper6c30e6f631ea\Symfony\Component\Config\FileLocator;
use _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper6c30e6f631ea\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
