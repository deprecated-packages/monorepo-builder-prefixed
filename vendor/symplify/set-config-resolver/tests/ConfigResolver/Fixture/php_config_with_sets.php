<?php

declare (strict_types=1);
namespace _PhpScoperc9dc9dec1b4a;

use _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
