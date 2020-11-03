<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperee8f03533f8b\Symfony\Component\Config\FileLocator;
use _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperee8f03533f8b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
