<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperbe77f3b0e77d\Symfony\Component\Config\FileLocator;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbe77f3b0e77d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
