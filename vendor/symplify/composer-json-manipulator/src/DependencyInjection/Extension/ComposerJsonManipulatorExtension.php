<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperc693a7d83f11\Symfony\Component\Config\FileLocator;
use _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc693a7d83f11\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
