<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperc53cafc6ca57\Symfony\Component\Config\FileLocator;
use _PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc53cafc6ca57\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc53cafc6ca57\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
