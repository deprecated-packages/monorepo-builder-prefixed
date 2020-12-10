<?php

declare (strict_types=1);
namespace _PhpScoper84d68f9a1b63;

use _PhpScoper84d68f9a1b63\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper84d68f9a1b63\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
