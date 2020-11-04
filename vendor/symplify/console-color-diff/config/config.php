<?php

declare (strict_types=1);
namespace _PhpScopere32570efa19a;

use _PhpScopere32570efa19a\SebastianBergmann\Diff\Differ;
use _PhpScopere32570efa19a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere32570efa19a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere32570efa19a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
