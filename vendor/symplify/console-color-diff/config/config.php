<?php

declare (strict_types=1);
namespace _PhpScoperedfa898a454f;

use _PhpScoperedfa898a454f\SebastianBergmann\Diff\Differ;
use _PhpScoperedfa898a454f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperedfa898a454f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperedfa898a454f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
