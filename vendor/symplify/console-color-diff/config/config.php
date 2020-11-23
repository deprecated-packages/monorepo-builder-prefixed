<?php

declare (strict_types=1);
namespace _PhpScoperc9dc9dec1b4a;

use _PhpScoperc9dc9dec1b4a\SebastianBergmann\Diff\Differ;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc9dc9dec1b4a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc9dc9dec1b4a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
