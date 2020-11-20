<?php

declare (strict_types=1);
namespace _PhpScopercdc90a6628b6;

use _PhpScopercdc90a6628b6\SebastianBergmann\Diff\Differ;
use _PhpScopercdc90a6628b6\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercdc90a6628b6\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercdc90a6628b6\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
