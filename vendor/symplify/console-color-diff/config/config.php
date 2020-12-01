<?php

declare (strict_types=1);
namespace _PhpScoperc4633daa1458;

use _PhpScoperc4633daa1458\SebastianBergmann\Diff\Differ;
use _PhpScoperc4633daa1458\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc4633daa1458\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc4633daa1458\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
