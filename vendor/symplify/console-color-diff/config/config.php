<?php

declare (strict_types=1);
namespace _PhpScoperdfdcb3d4cca0;

use _PhpScoperdfdcb3d4cca0\SebastianBergmann\Diff\Differ;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdfdcb3d4cca0\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdfdcb3d4cca0\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
