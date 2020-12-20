<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperb2257feafd7d\Symfony\Component\Config\FileLocator;
use _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb2257feafd7d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
