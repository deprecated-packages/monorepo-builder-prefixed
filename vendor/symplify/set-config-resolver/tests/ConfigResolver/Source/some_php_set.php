<?php

declare (strict_types=1);
namespace _PhpScoper09a4cc789a22;

use _PhpScoper09a4cc789a22\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper09a4cc789a22\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
