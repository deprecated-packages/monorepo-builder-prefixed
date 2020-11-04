<?php

declare (strict_types=1);
namespace _PhpScoper860bc98a0f96;

use _PhpScoper860bc98a0f96\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper860bc98a0f96\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
