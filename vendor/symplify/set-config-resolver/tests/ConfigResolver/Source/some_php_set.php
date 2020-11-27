<?php

declare (strict_types=1);
namespace _PhpScoper5818bcaf1010;

use _PhpScoper5818bcaf1010\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5818bcaf1010\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
