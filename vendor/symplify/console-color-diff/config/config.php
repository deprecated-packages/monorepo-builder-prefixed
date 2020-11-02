<?php

declare (strict_types=1);
namespace _PhpScopercdfd316eda69;

use _PhpScopercdfd316eda69\SebastianBergmann\Diff\Differ;
use _PhpScopercdfd316eda69\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercdfd316eda69\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercdfd316eda69\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
