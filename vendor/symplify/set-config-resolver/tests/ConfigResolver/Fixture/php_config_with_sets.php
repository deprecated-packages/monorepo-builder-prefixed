<?php

declare (strict_types=1);
namespace _PhpScoper62cf10e7b378;

use _PhpScoper62cf10e7b378\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper62cf10e7b378\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
