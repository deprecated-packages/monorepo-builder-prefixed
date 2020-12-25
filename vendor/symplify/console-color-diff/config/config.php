<?php

declare (strict_types=1);
namespace _PhpScoper95e170f0b4ac;

use _PhpScoper95e170f0b4ac\SebastianBergmann\Diff\Differ;
use _PhpScoper95e170f0b4ac\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper95e170f0b4ac\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper95e170f0b4ac\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
