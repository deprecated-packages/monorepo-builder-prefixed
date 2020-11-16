<?php

declare (strict_types=1);
namespace _PhpScoperd9ee792cdaf4;

use _PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
