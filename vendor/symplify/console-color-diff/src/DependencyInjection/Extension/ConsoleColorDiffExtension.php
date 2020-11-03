<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoper8a421ef9d4c6\Symfony\Component\Config\FileLocator;
use _PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper8a421ef9d4c6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper8a421ef9d4c6\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
