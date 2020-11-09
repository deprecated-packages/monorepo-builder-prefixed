<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperedfa898a454f\Symfony\Component\Config\FileLocator;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperedfa898a454f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
