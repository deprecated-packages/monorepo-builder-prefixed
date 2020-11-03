<?php

declare (strict_types=1);
namespace _PhpScopere73d4c0b7ec8;

use _PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
