<?php

declare (strict_types=1);
namespace _PhpScoper1c1f12bbe5a7;

use _PhpScoper1c1f12bbe5a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1c1f12bbe5a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
