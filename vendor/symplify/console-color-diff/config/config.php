<?php

declare (strict_types=1);
namespace _PhpScoperddf2171d3d2c;

use _PhpScoperddf2171d3d2c\SebastianBergmann\Diff\Differ;
use _PhpScoperddf2171d3d2c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperddf2171d3d2c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperddf2171d3d2c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
