<?php

declare (strict_types=1);
namespace _PhpScoperc7f1624089a3;

use _PhpScoperc7f1624089a3\SebastianBergmann\Diff\Differ;
use _PhpScoperc7f1624089a3\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc7f1624089a3\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc7f1624089a3\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
