<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperb3e4472dbe9b\Symfony\Component\Config\FileLocator;
use _PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb3e4472dbe9b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
