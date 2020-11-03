<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperf1163522a13e\Symfony\Component\Config\FileLocator;
use _PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf1163522a13e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
