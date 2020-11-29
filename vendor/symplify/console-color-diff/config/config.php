<?php

declare (strict_types=1);
namespace _PhpScoperf4997c409394;

use _PhpScoperf4997c409394\SebastianBergmann\Diff\Differ;
use _PhpScoperf4997c409394\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf4997c409394\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf4997c409394\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf4997c409394\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf4997c409394\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf4997c409394\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf4997c409394\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
