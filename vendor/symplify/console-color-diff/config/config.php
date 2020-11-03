<?php

declare (strict_types=1);
namespace _PhpScoperf1163522a13e;

use _PhpScoperf1163522a13e\SebastianBergmann\Diff\Differ;
use _PhpScoperf1163522a13e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf1163522a13e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf1163522a13e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf1163522a13e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
