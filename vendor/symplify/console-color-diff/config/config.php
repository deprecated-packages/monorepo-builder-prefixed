<?php

declare (strict_types=1);
namespace _PhpScopera3403994bd90;

use _PhpScopera3403994bd90\SebastianBergmann\Diff\Differ;
use _PhpScopera3403994bd90\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera3403994bd90\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera3403994bd90\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
