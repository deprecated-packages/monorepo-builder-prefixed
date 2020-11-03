<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperd6a443964d04\Symfony\Component\Config\FileLocator;
use _PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd6a443964d04\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd6a443964d04\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
