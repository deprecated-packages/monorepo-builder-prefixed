<?php

declare (strict_types=1);
namespace _PhpScoperafeb7177e88e;

use _PhpScoperafeb7177e88e\SebastianBergmann\Diff\Differ;
use _PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperafeb7177e88e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
