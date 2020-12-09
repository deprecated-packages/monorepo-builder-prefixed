<?php

declare (strict_types=1);
namespace _PhpScoperb15c77d6bb3b;

use _PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
