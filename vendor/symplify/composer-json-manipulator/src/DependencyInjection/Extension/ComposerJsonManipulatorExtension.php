<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperbb737891eded\Symfony\Component\Config\FileLocator;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbb737891eded\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
