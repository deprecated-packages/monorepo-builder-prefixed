<?php

declare (strict_types=1);
namespace _PhpScoperfa13b4bfa005;

use _PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa13b4bfa005\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
