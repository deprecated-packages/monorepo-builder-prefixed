<?php

declare (strict_types=1);
namespace _PhpScopere0f28e6b9bde;

use _PhpScopere0f28e6b9bde\SebastianBergmann\Diff\Differ;
use _PhpScopere0f28e6b9bde\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere0f28e6b9bde\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere0f28e6b9bde\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
