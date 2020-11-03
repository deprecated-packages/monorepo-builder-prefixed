<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperd4e30d8318e8\Symfony\Component\Config\FileLocator;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd4e30d8318e8\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
