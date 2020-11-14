<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoper450cfab1c22b\Symfony\Component\Config\FileLocator;
use _PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper450cfab1c22b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper450cfab1c22b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
