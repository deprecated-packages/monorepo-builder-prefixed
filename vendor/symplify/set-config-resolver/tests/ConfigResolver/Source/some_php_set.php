<?php

declare (strict_types=1);
namespace _PhpScoper31a2d0e8f655;

use _PhpScoper31a2d0e8f655\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper31a2d0e8f655\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
