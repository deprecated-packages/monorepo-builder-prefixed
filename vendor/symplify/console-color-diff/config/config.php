<?php

declare (strict_types=1);
namespace _PhpScoperda849baa4a45;

use _PhpScoperda849baa4a45\SebastianBergmann\Diff\Differ;
use _PhpScoperda849baa4a45\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperda849baa4a45\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperda849baa4a45\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
