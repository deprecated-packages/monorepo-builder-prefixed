<?php

declare (strict_types=1);
namespace _PhpScoper4c229f9734b6;

use _PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
