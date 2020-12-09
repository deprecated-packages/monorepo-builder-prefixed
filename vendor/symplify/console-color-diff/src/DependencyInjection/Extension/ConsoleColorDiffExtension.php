<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperaf523e5605cc\Symfony\Component\Config\FileLocator;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaf523e5605cc\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
