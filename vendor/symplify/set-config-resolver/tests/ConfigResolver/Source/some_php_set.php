<?php

declare (strict_types=1);
namespace _PhpScoperf6f8e31183c3;

use _PhpScoperf6f8e31183c3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf6f8e31183c3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
