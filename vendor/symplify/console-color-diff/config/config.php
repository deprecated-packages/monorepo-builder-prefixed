<?php

declare (strict_types=1);
namespace _PhpScoperdd9048e10aae;

use _PhpScoperdd9048e10aae\SebastianBergmann\Diff\Differ;
use _PhpScoperdd9048e10aae\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdd9048e10aae\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
