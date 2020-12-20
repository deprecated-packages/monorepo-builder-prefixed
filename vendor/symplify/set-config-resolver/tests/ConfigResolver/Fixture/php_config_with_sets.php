<?php

declare (strict_types=1);
namespace _PhpScoper6cc1788cdd91;

use _PhpScoper6cc1788cdd91\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6cc1788cdd91\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
