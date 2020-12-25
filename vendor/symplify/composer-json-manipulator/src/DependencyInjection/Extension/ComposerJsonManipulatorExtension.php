<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperff72c38d4e2a\Symfony\Component\Config\FileLocator;
use _PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperff72c38d4e2a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
