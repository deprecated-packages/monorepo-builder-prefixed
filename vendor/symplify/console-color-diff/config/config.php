<?php

declare (strict_types=1);
namespace _PhpScoperabca9a64438b;

use _PhpScoperabca9a64438b\SebastianBergmann\Diff\Differ;
use _PhpScoperabca9a64438b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperabca9a64438b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperabca9a64438b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
