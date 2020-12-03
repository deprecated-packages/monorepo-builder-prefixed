<?php

declare (strict_types=1);
namespace _PhpScoper6c30e6f631ea;

use _PhpScoper6c30e6f631ea\SebastianBergmann\Diff\Differ;
use _PhpScoper6c30e6f631ea\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper6c30e6f631ea\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper6c30e6f631ea\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
