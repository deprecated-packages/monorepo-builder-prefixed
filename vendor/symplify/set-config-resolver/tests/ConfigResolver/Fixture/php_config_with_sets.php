<?php

declare (strict_types=1);
namespace _PhpScoper3a64dbb4e14f;

use _PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
