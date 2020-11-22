<?php

declare (strict_types=1);
namespace _PhpScoper29aa9f1ba53d;

use _PhpScoper29aa9f1ba53d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper29aa9f1ba53d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
