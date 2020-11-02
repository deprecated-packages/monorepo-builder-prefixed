<?php

declare (strict_types=1);
namespace _PhpScoperabb8c88e9df1;

use _PhpScoperabb8c88e9df1\SebastianBergmann\Diff\Differ;
use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperabb8c88e9df1\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperabb8c88e9df1\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
