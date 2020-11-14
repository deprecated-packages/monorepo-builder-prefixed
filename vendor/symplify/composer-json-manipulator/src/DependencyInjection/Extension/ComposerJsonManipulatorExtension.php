<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopera3f2f7450f99\Symfony\Component\Config\FileLocator;
use _PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera3f2f7450f99\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
