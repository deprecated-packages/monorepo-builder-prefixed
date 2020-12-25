<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperef96225926e2\Symfony\Component\Config\FileLocator;
use _PhpScoperef96225926e2\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperef96225926e2\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperef96225926e2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperef96225926e2\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperef96225926e2\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperef96225926e2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperef96225926e2\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
