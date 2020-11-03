<?php

declare (strict_types=1);
namespace _PhpScoperab3ccffcffcd;

use _PhpScoperab3ccffcffcd\SebastianBergmann\Diff\Differ;
use _PhpScoperab3ccffcffcd\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperab3ccffcffcd\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperab3ccffcffcd\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
