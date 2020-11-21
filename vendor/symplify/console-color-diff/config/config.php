<?php

declare (strict_types=1);
namespace _PhpScoperbc89827b806f;

use _PhpScoperbc89827b806f\SebastianBergmann\Diff\Differ;
use _PhpScoperbc89827b806f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbc89827b806f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperbc89827b806f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
