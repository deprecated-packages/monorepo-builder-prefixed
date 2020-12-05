<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopereaa086e6f852\Symfony\Component\Config\FileLocator;
use _PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopereaa086e6f852\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
