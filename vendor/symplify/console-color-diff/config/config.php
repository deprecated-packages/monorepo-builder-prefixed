<?php

declare (strict_types=1);
namespace _PhpScoperbe77f3b0e77d;

use _PhpScoperbe77f3b0e77d\SebastianBergmann\Diff\Differ;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbe77f3b0e77d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperbe77f3b0e77d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
