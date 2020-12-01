<?php

declare (strict_types=1);
namespace _PhpScopera28be7b3fe51;

use _PhpScopera28be7b3fe51\SebastianBergmann\Diff\Differ;
use _PhpScopera28be7b3fe51\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera28be7b3fe51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera28be7b3fe51\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera28be7b3fe51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera28be7b3fe51\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera28be7b3fe51\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera28be7b3fe51\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
