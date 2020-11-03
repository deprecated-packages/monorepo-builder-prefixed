<?php

declare (strict_types=1);
namespace _PhpScopere73d4c0b7ec8;

use _PhpScopere73d4c0b7ec8\SebastianBergmann\Diff\Differ;
use _PhpScopere73d4c0b7ec8\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere73d4c0b7ec8\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere73d4c0b7ec8\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
