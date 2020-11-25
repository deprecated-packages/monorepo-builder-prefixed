<?php

declare (strict_types=1);
namespace _PhpScoper44b9ade4c89e;

use _PhpScoper44b9ade4c89e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper44b9ade4c89e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
