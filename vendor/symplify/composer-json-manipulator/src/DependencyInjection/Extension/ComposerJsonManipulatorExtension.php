<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper9b3b288e828e\Symfony\Component\Config\FileLocator;
use _PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper9b3b288e828e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper9b3b288e828e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
