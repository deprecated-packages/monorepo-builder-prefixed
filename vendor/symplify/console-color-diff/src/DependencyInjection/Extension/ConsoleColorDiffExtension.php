<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperc9dee8f3b3e7\Symfony\Component\Config\FileLocator;
use _PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc9dee8f3b3e7\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
