<?php

declare (strict_types=1);
namespace _PhpScopere809b8269e19;

use _PhpScopere809b8269e19\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere809b8269e19\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Init\\', __DIR__ . '/../src');
};
