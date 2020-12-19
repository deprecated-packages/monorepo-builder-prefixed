<?php

declare (strict_types=1);
namespace _PhpScoperac0a9a33ae94;

use _PhpScoperac0a9a33ae94\SebastianBergmann\Diff\Differ;
use _PhpScoperac0a9a33ae94\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperac0a9a33ae94\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperac0a9a33ae94\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
