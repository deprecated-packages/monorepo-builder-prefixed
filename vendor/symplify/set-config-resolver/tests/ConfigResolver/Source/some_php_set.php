<?php

declare (strict_types=1);
namespace _PhpScoper47ce95ac3375;

use _PhpScoper47ce95ac3375\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47ce95ac3375\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
