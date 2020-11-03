<?php

declare (strict_types=1);
namespace _PhpScoper15dc67236b17;

use _PhpScoper15dc67236b17\SebastianBergmann\Diff\Differ;
use _PhpScoper15dc67236b17\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper15dc67236b17\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper15dc67236b17\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper15dc67236b17\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper15dc67236b17\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper15dc67236b17\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper15dc67236b17\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
