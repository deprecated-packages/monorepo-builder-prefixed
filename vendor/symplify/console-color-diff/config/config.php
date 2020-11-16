<?php

declare (strict_types=1);
namespace _PhpScoperd9ee792cdaf4;

use _PhpScoperd9ee792cdaf4\SebastianBergmann\Diff\Differ;
use _PhpScoperd9ee792cdaf4\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd9ee792cdaf4\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd9ee792cdaf4\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
