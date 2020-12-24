<?php

declare (strict_types=1);
namespace _PhpScoper68e56c1b5bd9;

use _PhpScoper68e56c1b5bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper68e56c1b5bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
