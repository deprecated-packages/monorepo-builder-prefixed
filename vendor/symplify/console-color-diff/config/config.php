<?php

declare (strict_types=1);
namespace _PhpScoperc0b8351d879b;

use _PhpScoperc0b8351d879b\SebastianBergmann\Diff\Differ;
use _PhpScoperc0b8351d879b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc0b8351d879b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc0b8351d879b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
