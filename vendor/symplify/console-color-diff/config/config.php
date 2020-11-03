<?php

declare (strict_types=1);
namespace _PhpScoper323d4c178bee;

use _PhpScoper323d4c178bee\SebastianBergmann\Diff\Differ;
use _PhpScoper323d4c178bee\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper323d4c178bee\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper323d4c178bee\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
