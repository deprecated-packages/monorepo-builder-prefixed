<?php

declare (strict_types=1);
namespace _PhpScoper0ce3ac6864aa;

use _PhpScoper0ce3ac6864aa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0ce3ac6864aa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
