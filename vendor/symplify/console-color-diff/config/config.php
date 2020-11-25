<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\SebastianBergmann\Diff\Differ;
use _PhpScoperfa8ac9431c57\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfa8ac9431c57\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfa8ac9431c57\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
