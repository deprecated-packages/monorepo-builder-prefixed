<?php

declare (strict_types=1);
namespace _PhpScopereaa2cae8e093;

use _PhpScopereaa2cae8e093\SebastianBergmann\Diff\Differ;
use _PhpScopereaa2cae8e093\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopereaa2cae8e093\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopereaa2cae8e093\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
