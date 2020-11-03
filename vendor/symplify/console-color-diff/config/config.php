<?php

declare (strict_types=1);
namespace _PhpScoperb154859e1be7;

use _PhpScoperb154859e1be7\SebastianBergmann\Diff\Differ;
use _PhpScoperb154859e1be7\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb154859e1be7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb154859e1be7\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb154859e1be7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb154859e1be7\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb154859e1be7\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb154859e1be7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
