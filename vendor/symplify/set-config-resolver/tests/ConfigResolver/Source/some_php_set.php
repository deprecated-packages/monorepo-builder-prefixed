<?php

declare (strict_types=1);
namespace _PhpScoper80b6fe7627f7;

use _PhpScoper80b6fe7627f7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper80b6fe7627f7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
