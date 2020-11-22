<?php

declare (strict_types=1);
namespace _PhpScoperc41e8050ff3f;

use _PhpScoperc41e8050ff3f\SebastianBergmann\Diff\Differ;
use _PhpScoperc41e8050ff3f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc41e8050ff3f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc41e8050ff3f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
