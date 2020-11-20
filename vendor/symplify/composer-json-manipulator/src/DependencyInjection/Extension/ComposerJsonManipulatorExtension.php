<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopercdc90a6628b6\Symfony\Component\Config\FileLocator;
use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercdc90a6628b6\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
