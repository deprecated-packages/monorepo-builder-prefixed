<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopere6d124d1f7ba\Symfony\Component\Config\FileLocator;
use _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere6d124d1f7ba\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
