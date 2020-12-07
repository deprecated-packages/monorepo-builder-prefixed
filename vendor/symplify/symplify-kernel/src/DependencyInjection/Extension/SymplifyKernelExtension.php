<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopereb7fcd8f999a\Symfony\Component\Config\FileLocator;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopereb7fcd8f999a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
