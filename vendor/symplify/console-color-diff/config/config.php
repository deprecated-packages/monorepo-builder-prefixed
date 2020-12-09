<?php

declare (strict_types=1);
namespace _PhpScopera85504f0ea7b;

use _PhpScopera85504f0ea7b\SebastianBergmann\Diff\Differ;
use _PhpScopera85504f0ea7b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera85504f0ea7b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera85504f0ea7b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
