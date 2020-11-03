<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperc00d4390f333\Symfony\Component\Config\FileLocator;
use _PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc00d4390f333\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
