<?php

declare (strict_types=1);
namespace _PhpScoper51570eac51fe;

use _PhpScoper51570eac51fe\SebastianBergmann\Diff\Differ;
use _PhpScoper51570eac51fe\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper51570eac51fe\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper51570eac51fe\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
