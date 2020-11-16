<?php

declare (strict_types=1);
namespace _PhpScoper29d04ea58d14;

use _PhpScoper29d04ea58d14\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper29d04ea58d14\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
