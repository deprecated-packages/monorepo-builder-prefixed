<?php

declare (strict_types=1);
namespace _PhpScoperbd03d493ccc6;

use _PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
