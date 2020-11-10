<?php

declare (strict_types=1);
namespace _PhpScopera31d0d6ff47a;

use _PhpScopera31d0d6ff47a\SebastianBergmann\Diff\Differ;
use _PhpScopera31d0d6ff47a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera31d0d6ff47a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera31d0d6ff47a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
