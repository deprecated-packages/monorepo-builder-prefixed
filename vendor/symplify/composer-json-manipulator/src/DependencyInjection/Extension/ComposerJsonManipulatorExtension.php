<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperaa2560a8a931\Symfony\Component\Config\FileLocator;
use _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaa2560a8a931\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
