<?php

declare (strict_types=1);
namespace _PhpScopera2f1d1d42b88;

use _PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
