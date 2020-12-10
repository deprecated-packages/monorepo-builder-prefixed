<?php

declare (strict_types=1);
namespace _PhpScoper4c229f9734b6;

use _PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Init\\', __DIR__ . '/../src');
};
