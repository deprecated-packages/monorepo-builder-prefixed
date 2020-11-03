<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperdd9048e10aae\Symfony\Component\Config\FileLocator;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdd9048e10aae\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
