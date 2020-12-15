<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperd79f30a2f8be\Symfony\Component\Config\FileLocator;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd79f30a2f8be\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
