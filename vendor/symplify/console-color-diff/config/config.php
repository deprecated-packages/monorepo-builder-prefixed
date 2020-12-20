<?php

declare (strict_types=1);
namespace _PhpScoper764e721c42e8;

use _PhpScoper764e721c42e8\SebastianBergmann\Diff\Differ;
use _PhpScoper764e721c42e8\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper764e721c42e8\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper764e721c42e8\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
