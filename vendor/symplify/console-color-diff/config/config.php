<?php

declare (strict_types=1);
namespace _PhpScoperab93339c6bca;

use _PhpScoperab93339c6bca\SebastianBergmann\Diff\Differ;
use _PhpScoperab93339c6bca\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperab93339c6bca\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperab93339c6bca\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
