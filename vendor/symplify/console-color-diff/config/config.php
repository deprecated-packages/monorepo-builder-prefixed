<?php

declare (strict_types=1);
namespace _PhpScoperfdd2db5e123d;

use _PhpScoperfdd2db5e123d\SebastianBergmann\Diff\Differ;
use _PhpScoperfdd2db5e123d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfdd2db5e123d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfdd2db5e123d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
