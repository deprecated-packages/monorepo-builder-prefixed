<?php

declare (strict_types=1);
namespace _PhpScoperb2257feafd7d;

use _PhpScoperb2257feafd7d\SebastianBergmann\Diff\Differ;
use _PhpScoperb2257feafd7d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb2257feafd7d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb2257feafd7d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
