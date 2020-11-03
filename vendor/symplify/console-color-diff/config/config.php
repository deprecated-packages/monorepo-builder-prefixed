<?php

declare (strict_types=1);
namespace _PhpScoperd4e30d8318e8;

use _PhpScoperd4e30d8318e8\SebastianBergmann\Diff\Differ;
use _PhpScoperd4e30d8318e8\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd4e30d8318e8\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd4e30d8318e8\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
