<?php

declare (strict_types=1);
namespace _PhpScoperb2724c6b069f;

use _PhpScoperb2724c6b069f\SebastianBergmann\Diff\Differ;
use _PhpScoperb2724c6b069f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb2724c6b069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb2724c6b069f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb2724c6b069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb2724c6b069f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb2724c6b069f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb2724c6b069f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
