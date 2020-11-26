<?php

declare (strict_types=1);
namespace _PhpScoper905a278e297d;

use _PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Merge\\', __DIR__ . '/../src');
};
