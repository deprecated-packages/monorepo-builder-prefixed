<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperab3ccffcffcd\Symfony\Component\Config\FileLocator;
use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperab3ccffcffcd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
