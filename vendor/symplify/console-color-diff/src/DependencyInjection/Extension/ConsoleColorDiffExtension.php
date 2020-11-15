<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperaff2103cee1d\Symfony\Component\Config\FileLocator;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaff2103cee1d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
