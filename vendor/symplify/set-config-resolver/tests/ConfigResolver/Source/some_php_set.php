<?php

declare (strict_types=1);
namespace _PhpScoper77ed23b49cd3;

use _PhpScoper77ed23b49cd3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper77ed23b49cd3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
