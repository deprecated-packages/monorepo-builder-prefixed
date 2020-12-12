<?php

declare (strict_types=1);
namespace _PhpScoper6d6fbd28d6a9;

use _PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
