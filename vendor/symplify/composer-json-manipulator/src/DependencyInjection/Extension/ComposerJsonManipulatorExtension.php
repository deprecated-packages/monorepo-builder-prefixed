<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperb9e77befe692\Symfony\Component\Config\FileLocator;
use _PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb9e77befe692\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb9e77befe692\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
