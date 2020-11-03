<?php

declare (strict_types=1);
namespace _PhpScoper95efb8ddea2f;

use _PhpScoper95efb8ddea2f\SebastianBergmann\Diff\Differ;
use _PhpScoper95efb8ddea2f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper95efb8ddea2f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper95efb8ddea2f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
