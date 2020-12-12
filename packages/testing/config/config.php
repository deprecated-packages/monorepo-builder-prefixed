<?php

declare (strict_types=1);
namespace _PhpScoperf40000691b7b;

use _PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf40000691b7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Testing\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/ValueObject']);
};
