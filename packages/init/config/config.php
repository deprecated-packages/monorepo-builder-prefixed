<?php

declare (strict_types=1);
namespace _PhpScoper47e141fb470a;

use _PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Init\\', __DIR__ . '/../src');
};
