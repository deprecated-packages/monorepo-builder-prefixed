<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperf9ff1c3447b1\Symfony\Component\Config\FileLocator;
use _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf9ff1c3447b1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
