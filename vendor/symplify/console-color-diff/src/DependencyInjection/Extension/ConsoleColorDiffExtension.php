<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperdbf49b510e11\Symfony\Component\Config\FileLocator;
use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdbf49b510e11\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
