<?php

declare (strict_types=1);
namespace _PhpScoper5efd9ec7ae1e;

use _PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5efd9ec7ae1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
