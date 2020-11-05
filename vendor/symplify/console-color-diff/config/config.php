<?php

declare (strict_types=1);
namespace _PhpScoperf78d2b40800e;

use _PhpScoperf78d2b40800e\SebastianBergmann\Diff\Differ;
use _PhpScoperf78d2b40800e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf78d2b40800e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
