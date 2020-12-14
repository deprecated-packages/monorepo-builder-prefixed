<?php

declare (strict_types=1);
namespace _PhpScoperc9dee8f3b3e7;

use _PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc9dee8f3b3e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
