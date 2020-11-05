<?php

declare (strict_types=1);
namespace _PhpScoperfd1a6a0ee9af;

use _PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Differ;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfd1a6a0ee9af\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
