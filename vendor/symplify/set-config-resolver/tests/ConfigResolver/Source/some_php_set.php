<?php

declare (strict_types=1);
namespace _PhpScoper69b0f14b2eca;

use _PhpScoper69b0f14b2eca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper69b0f14b2eca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
