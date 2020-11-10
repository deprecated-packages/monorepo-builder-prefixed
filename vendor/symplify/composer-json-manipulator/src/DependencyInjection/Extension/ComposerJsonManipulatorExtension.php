<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopera31d0d6ff47a\Symfony\Component\Config\FileLocator;
use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera31d0d6ff47a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
