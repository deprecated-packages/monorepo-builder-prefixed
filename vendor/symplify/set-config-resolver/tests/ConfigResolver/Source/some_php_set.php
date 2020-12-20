<?php

declare (strict_types=1);
namespace _PhpScoper6b92aa0ec16f;

use _PhpScoper6b92aa0ec16f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6b92aa0ec16f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
