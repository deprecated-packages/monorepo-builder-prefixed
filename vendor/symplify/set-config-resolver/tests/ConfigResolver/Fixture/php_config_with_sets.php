<?php

declare (strict_types=1);
namespace _PhpScoper1832ada183f6;

use _PhpScoper1832ada183f6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1832ada183f6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
