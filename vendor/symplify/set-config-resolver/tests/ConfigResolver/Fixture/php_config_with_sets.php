<?php

declare (strict_types=1);
namespace _PhpScoper6bfbe5ea8949;

use _PhpScoper6bfbe5ea8949\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6bfbe5ea8949\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
