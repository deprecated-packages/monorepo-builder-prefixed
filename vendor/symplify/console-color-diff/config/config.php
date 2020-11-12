<?php

declare (strict_types=1);
namespace _PhpScoperb0f70d760c3d;

use _PhpScoperb0f70d760c3d\SebastianBergmann\Diff\Differ;
use _PhpScoperb0f70d760c3d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb0f70d760c3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb0f70d760c3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb0f70d760c3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb0f70d760c3d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb0f70d760c3d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb0f70d760c3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
