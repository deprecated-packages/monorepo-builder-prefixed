<?php

declare (strict_types=1);
namespace _PhpScoperdbf49b510e11;

use _PhpScoperdbf49b510e11\SebastianBergmann\Diff\Differ;
use _PhpScoperdbf49b510e11\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdbf49b510e11\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdbf49b510e11\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
