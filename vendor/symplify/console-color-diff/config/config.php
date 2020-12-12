<?php

declare (strict_types=1);
namespace _PhpScoperad5317739bda;

use _PhpScoperad5317739bda\SebastianBergmann\Diff\Differ;
use _PhpScoperad5317739bda\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad5317739bda\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperad5317739bda\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
