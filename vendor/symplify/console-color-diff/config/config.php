<?php

declare (strict_types=1);
namespace _PhpScoper23507306fdfc;

use _PhpScoper23507306fdfc\SebastianBergmann\Diff\Differ;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper23507306fdfc\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper23507306fdfc\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
