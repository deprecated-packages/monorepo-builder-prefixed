<?php

declare (strict_types=1);
namespace _PhpScoper93a7e58d9dd1;

use _PhpScoper93a7e58d9dd1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper93a7e58d9dd1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
