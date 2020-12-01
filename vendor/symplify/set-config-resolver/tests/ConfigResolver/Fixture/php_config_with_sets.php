<?php

declare (strict_types=1);
namespace _PhpScoper1c9ce01e7be6;

use _PhpScoper1c9ce01e7be6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1c9ce01e7be6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
