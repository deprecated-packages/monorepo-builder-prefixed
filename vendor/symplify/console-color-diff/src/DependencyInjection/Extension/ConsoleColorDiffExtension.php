<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperec2b815193b4\Symfony\Component\Config\FileLocator;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperec2b815193b4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperec2b815193b4\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
