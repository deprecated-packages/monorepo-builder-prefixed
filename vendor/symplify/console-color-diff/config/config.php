<?php

declare (strict_types=1);
namespace _PhpScoperb3e4472dbe9b;

use _PhpScoperb3e4472dbe9b\SebastianBergmann\Diff\Differ;
use _PhpScoperb3e4472dbe9b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb3e4472dbe9b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb3e4472dbe9b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb3e4472dbe9b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
