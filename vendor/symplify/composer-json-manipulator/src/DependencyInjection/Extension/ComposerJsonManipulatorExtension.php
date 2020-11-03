<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper84ee03573073\Symfony\Component\Config\FileLocator;
use _PhpScoper84ee03573073\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper84ee03573073\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper84ee03573073\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
