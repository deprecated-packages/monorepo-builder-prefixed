<?php

declare (strict_types=1);
namespace _PhpScoperb1086ecf2bcb;

use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
