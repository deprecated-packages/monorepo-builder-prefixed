<?php

declare (strict_types=1);
namespace _PhpScopera4d786bbd33f;

use _PhpScopera4d786bbd33f\SebastianBergmann\Diff\Differ;
use _PhpScopera4d786bbd33f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera4d786bbd33f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera4d786bbd33f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
