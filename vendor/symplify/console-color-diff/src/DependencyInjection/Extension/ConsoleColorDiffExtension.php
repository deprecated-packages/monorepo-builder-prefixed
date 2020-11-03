<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopere57ee17947a3\Symfony\Component\Config\FileLocator;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere57ee17947a3\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
