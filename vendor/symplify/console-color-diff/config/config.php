<?php

declare (strict_types=1);
namespace _PhpScoperdfa889d8967a;

use _PhpScoperdfa889d8967a\SebastianBergmann\Diff\Differ;
use _PhpScoperdfa889d8967a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdfa889d8967a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdfa889d8967a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
