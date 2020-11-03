<?php

declare (strict_types=1);
namespace _PhpScoperee8f03533f8b;

use _PhpScoperee8f03533f8b\SebastianBergmann\Diff\Differ;
use _PhpScoperee8f03533f8b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperee8f03533f8b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperee8f03533f8b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
