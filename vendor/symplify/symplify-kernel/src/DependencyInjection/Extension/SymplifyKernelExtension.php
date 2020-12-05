<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperbd03d493ccc6\Symfony\Component\Config\FileLocator;
use _PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbd03d493ccc6\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
