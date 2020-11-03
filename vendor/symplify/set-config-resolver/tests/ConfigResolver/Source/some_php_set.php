<?php

declare (strict_types=1);
namespace _PhpScoper6b2f62f5c7a4;

use _PhpScoper6b2f62f5c7a4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6b2f62f5c7a4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
