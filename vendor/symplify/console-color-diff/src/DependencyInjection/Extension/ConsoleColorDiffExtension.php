<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperc51531d67326\Symfony\Component\Config\FileLocator;
use _PhpScoperc51531d67326\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc51531d67326\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc51531d67326\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperc51531d67326\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc51531d67326\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc51531d67326\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc51531d67326\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
