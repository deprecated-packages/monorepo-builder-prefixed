<?php

declare (strict_types=1);
namespace _PhpScoper66a1b4bf441c;

use _PhpScoper66a1b4bf441c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper66a1b4bf441c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
