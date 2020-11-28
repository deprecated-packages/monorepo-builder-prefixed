<?php

declare (strict_types=1);
namespace _PhpScoperbe77f3b0e77d;

use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
