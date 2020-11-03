<?php

declare (strict_types=1);
namespace _PhpScoperf9ff1c3447b1;

use _PhpScoperf9ff1c3447b1\SebastianBergmann\Diff\Differ;
use _PhpScoperf9ff1c3447b1\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf9ff1c3447b1\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf9ff1c3447b1\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
