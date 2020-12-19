<?php

declare (strict_types=1);
namespace _PhpScopere10afbb60721;

use _PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Init\\', __DIR__ . '/../src');
};
