<?php

declare (strict_types=1);
namespace _PhpScoperaa2560a8a931;

use _PhpScoperaa2560a8a931\SebastianBergmann\Diff\Differ;
use _PhpScoperaa2560a8a931\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaa2560a8a931\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperaa2560a8a931\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
