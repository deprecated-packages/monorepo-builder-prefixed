<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperda849baa4a45\Symfony\Component\Config\FileLocator;
use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperda849baa4a45\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
