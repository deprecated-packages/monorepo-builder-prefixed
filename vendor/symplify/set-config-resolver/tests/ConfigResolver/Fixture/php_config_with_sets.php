<?php

declare (strict_types=1);
namespace _PhpScopera1d8e0344ecf;

use _PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera1d8e0344ecf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
