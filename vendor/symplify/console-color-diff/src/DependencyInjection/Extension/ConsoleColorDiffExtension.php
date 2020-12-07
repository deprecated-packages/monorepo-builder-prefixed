<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopercd5c1af09a49\Symfony\Component\Config\FileLocator;
use _PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercd5c1af09a49\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
