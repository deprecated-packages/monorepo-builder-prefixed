<?php

declare (strict_types=1);
namespace _PhpScoperac0a9a33ae94;

use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
