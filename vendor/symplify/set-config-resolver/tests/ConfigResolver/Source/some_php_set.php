<?php

declare (strict_types=1);
namespace _PhpScoper8d3e33bd2be8;

use _PhpScoper8d3e33bd2be8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8d3e33bd2be8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
