<?php

declare (strict_types=1);
namespace _PhpScoper50e98fdc5bc0;

use _PhpScoper50e98fdc5bc0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper50e98fdc5bc0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
