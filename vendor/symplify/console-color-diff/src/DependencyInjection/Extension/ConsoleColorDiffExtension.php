<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperee3ad0c2c096\Symfony\Component\Config\FileLocator;
use _PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperee3ad0c2c096\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
