<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopereb9e28d9f307\Symfony\Component\Config\FileLocator;
use _PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopereb9e28d9f307\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
