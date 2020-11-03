<?php

declare (strict_types=1);
namespace _PhpScoperc4f6ca029880;

use _PhpScoperc4f6ca029880\SebastianBergmann\Diff\Differ;
use _PhpScoperc4f6ca029880\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc4f6ca029880\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc4f6ca029880\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
