<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperc0b8351d879b\Symfony\Component\Config\FileLocator;
use _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc0b8351d879b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
