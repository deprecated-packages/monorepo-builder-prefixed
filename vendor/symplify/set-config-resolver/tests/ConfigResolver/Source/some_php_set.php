<?php

declare (strict_types=1);
namespace _PhpScoper540e5a7ff813;

use _PhpScoper540e5a7ff813\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper540e5a7ff813\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
