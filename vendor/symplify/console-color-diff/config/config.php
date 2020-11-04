<?php

declare (strict_types=1);
namespace _PhpScoperce084f4275dd;

use _PhpScoperce084f4275dd\SebastianBergmann\Diff\Differ;
use _PhpScoperce084f4275dd\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperce084f4275dd\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperce084f4275dd\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
