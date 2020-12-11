<?php

declare (strict_types=1);
namespace _PhpScoperbecbc4cd500f;

use _PhpScoperbecbc4cd500f\SebastianBergmann\Diff\Differ;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbecbc4cd500f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
