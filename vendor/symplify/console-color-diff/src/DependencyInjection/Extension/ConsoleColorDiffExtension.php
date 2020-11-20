<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperabca9a64438b\Symfony\Component\Config\FileLocator;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperabca9a64438b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
