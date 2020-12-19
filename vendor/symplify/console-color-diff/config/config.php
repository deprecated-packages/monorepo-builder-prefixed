<?php

declare (strict_types=1);
namespace _PhpScoper2f1e52375c65;

use _PhpScoper2f1e52375c65\SebastianBergmann\Diff\Differ;
use _PhpScoper2f1e52375c65\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper2f1e52375c65\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper2f1e52375c65\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper2f1e52375c65\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper2f1e52375c65\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper2f1e52375c65\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper2f1e52375c65\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
