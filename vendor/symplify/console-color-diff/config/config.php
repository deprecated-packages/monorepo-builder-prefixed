<?php

declare (strict_types=1);
namespace _PhpScoperc00d4390f333;

use _PhpScoperc00d4390f333\SebastianBergmann\Diff\Differ;
use _PhpScoperc00d4390f333\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc00d4390f333\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc00d4390f333\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc00d4390f333\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
