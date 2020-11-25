<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperfa8ac9431c57\Symfony\Component\Config\FileLocator;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfa8ac9431c57\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
