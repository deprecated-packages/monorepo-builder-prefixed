<?php

declare (strict_types=1);
namespace _PhpScoperc41e8050ff3f;

use _PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Merge\\', __DIR__ . '/../src');
};
