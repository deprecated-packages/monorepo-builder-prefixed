<?php

declare (strict_types=1);
namespace _PhpScopere0f28e6b9bde;

use _PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
