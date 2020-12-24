<?php

declare (strict_types=1);
namespace _PhpScoper2f9b0ac741dd;

use _PhpScoper2f9b0ac741dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2f9b0ac741dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
