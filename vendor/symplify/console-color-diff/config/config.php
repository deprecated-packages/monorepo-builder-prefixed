<?php

declare (strict_types=1);
namespace _PhpScoperd79f30a2f8be;

use _PhpScoperd79f30a2f8be\SebastianBergmann\Diff\Differ;
use _PhpScoperd79f30a2f8be\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd79f30a2f8be\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd79f30a2f8be\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
