<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperb15c77d6bb3b\Symfony\Component\Config\FileLocator;
use _PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb15c77d6bb3b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
