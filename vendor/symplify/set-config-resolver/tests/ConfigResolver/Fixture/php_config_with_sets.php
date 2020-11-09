<?php

declare (strict_types=1);
namespace _PhpScoper650fbdd90fa0;

use _PhpScoper650fbdd90fa0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper650fbdd90fa0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
