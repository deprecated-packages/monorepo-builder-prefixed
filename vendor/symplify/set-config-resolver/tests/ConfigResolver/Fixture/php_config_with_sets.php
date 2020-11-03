<?php

declare (strict_types=1);
namespace _PhpScoper95efb8ddea2f;

use _PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
