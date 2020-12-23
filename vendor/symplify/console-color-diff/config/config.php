<?php

declare (strict_types=1);
namespace _PhpScopere6d124d1f7ba;

use _PhpScopere6d124d1f7ba\SebastianBergmann\Diff\Differ;
use _PhpScopere6d124d1f7ba\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere6d124d1f7ba\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere6d124d1f7ba\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
