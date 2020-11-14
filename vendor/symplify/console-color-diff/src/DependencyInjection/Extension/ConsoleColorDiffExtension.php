<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperae7532b8c744\Symfony\Component\Config\FileLocator;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperae7532b8c744\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
