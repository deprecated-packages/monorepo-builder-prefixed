<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperafeb7177e88e\Symfony\Component\Config\FileLocator;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperafeb7177e88e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
