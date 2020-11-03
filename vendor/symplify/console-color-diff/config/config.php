<?php

declare (strict_types=1);
namespace _PhpScopere4e8aecb81b9;

use _PhpScopere4e8aecb81b9\SebastianBergmann\Diff\Differ;
use _PhpScopere4e8aecb81b9\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere4e8aecb81b9\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere4e8aecb81b9\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
