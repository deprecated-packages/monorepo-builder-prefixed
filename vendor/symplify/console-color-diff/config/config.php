<?php

declare (strict_types=1);
namespace _PhpScopere6fd569fd43f;

use _PhpScopere6fd569fd43f\SebastianBergmann\Diff\Differ;
use _PhpScopere6fd569fd43f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere6fd569fd43f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere6fd569fd43f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
