<?php

declare (strict_types=1);
namespace _PhpScoper7606a7c2799b;

use _PhpScoper7606a7c2799b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7606a7c2799b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Testing\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/ValueObject']);
};
