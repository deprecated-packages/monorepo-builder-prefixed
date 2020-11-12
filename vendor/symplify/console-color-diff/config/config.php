<?php

declare (strict_types=1);
namespace _PhpScoperad3f32c1b87c;

use _PhpScoperad3f32c1b87c\SebastianBergmann\Diff\Differ;
use _PhpScoperad3f32c1b87c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad3f32c1b87c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperad3f32c1b87c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
