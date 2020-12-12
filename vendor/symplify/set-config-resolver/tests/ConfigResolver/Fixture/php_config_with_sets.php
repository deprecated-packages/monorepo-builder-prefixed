<?php

declare (strict_types=1);
namespace _PhpScoper59bf8deb8cc1;

use _PhpScoper59bf8deb8cc1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper59bf8deb8cc1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
