<?php

declare (strict_types=1);
namespace _PhpScopereb7fcd8f999a;

use _PhpScopereb7fcd8f999a\SebastianBergmann\Diff\Differ;
use _PhpScopereb7fcd8f999a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopereb7fcd8f999a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopereb7fcd8f999a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
