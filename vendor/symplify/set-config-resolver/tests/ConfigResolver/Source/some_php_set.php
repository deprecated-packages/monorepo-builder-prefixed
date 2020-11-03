<?php

declare (strict_types=1);
namespace _PhpScoper3d314ab2cab4;

use _PhpScoper3d314ab2cab4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3d314ab2cab4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
