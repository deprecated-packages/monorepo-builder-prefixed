<?php

declare (strict_types=1);
namespace _PhpScoper8aa7c2bece07;

use _PhpScoper8aa7c2bece07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8aa7c2bece07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
