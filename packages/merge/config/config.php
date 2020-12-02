<?php

declare (strict_types=1);
namespace _PhpScopercd844fca8af3;

use _PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Merge\\', __DIR__ . '/../src');
};
