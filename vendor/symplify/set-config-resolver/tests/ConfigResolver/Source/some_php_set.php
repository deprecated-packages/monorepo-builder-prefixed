<?php

declare (strict_types=1);
namespace _PhpScoper47e141fb470a;

use _PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
