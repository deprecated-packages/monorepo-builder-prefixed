<?php

declare (strict_types=1);
namespace _PhpScoperef4638f5d8b1;

use _PhpScoperef4638f5d8b1\SebastianBergmann\Diff\Differ;
use _PhpScoperef4638f5d8b1\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperef4638f5d8b1\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperef4638f5d8b1\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
